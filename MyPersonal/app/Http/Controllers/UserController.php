<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\FooterRequest;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\PortfolioRequest;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\MailRequest;
use App\Mail\SendMail;
use App\Footer;
use App\About;
use App\Portfolio;
use App\Home;

class UserController extends Controller
{
    public function layouts(Request $request)
    {
        $footers=Footer::all();
        return view('layouts.User-Home')
        ->with('footers', $footers);
    }
    public function index(Request $request)
    {
        $footers=Footer::all();
        $homes=Home::all();
    	return view('User.index')
        ->with('footers',$footers)
        ->with('homes',$homes);
    }
    public function portFolio(Request $request)
    {
        $footers=Footer::all();
        $ports=Portfolio::all();
    	return view('User.portfolio')
        ->with('footers',$footers)
        ->with('ports',$ports);
    }
    public function about(Request $request)
    {
        $footers=Footer::all();
        $abouts=About::all();
    	return view('User.about')
        ->with('footers',$footers)
        ->with('abouts',$abouts);
    }
    public function contact(Request $request)
    {
        $footers=Footer::all();
    	return view('User.contact')
        ->with('footers',$footers);
    }
    public function sendEmail(MailRequest $request)
    {
        $data = array('name' =>$request->name ,
                     'mail'=>$request->mail,
                     'yourtext'=>$request->yourtext,
                 );
        Mail::to('munna.ak17@gmail.com')->send(new SendMail($data));
        $request->session()->flash('message','Thank Your for Contacting');
        return back();
    }
}
