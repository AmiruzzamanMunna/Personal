<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FooterRequest;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\PortfolioRequest;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\AdminRequest;
use App\Footer;
use App\About;
use App\Portfolio;
use App\Home;
use App\Admin;

class AdminController extends Controller
{
  public function index(Request $request)
  {
    return view('Admin.login');
  }
  public function adminLogin(AdminRequest $request)
  {
    $admin = Admin::where('username', $request->username)
                  ->where('password', $request->password)
                  ->first();
    if($admin) {
      $request->session()->put('loggedAdmin',$admin->id);
      $request->session()->flash('message','Logged in Successfull');
      return redirect()->route('admin.index');
     } 
     else {
      $request->session()->flash('message', 'Sorry Login Unsuccessfull');
      return back();
     }
  }
  public function adminlogout(Request $request)
  {
    $request->session()->flush();
    $request->session()->regenerate();
    return redirect()->route('admin.login');
  }
  public function home(Request $request)
  {
    $homes = Home::all();
  	return view('Admin.index')
          ->with('homes',$homes);
  }
  public function homeStore(HomeRequest $request)
  {
    $home= new Home();
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $filename = time() . 'home-1.' . $image->getClientOriginalExtension();
      $location = public_path('images/uploads');
      $image->move($location, $filename);
      // Image::make($image)->resize(800, 400)->save($location);
      $home->image = $filename;
    }
    $home->about=$request->about;
    $home->web=$request->web;
    $home->brand=$request->brand;
    $home->delivery=$request->delivery;
    $home->save();
    $request->session()->flash('message','Data Inserted');
    return back();
  }
  public function homeedit(Request $request,$id)
  {
    $homes= Home::where('id',$id)
                  ->get();
    return view('Admin.index')
            ->with('homes',$homes)
            ->with('id',$id);
  }
  public function homeupdate(HomeRequest $request,$id)
  {
    $home=Home::find($request->id);
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $filename = time() . 'home-1.' . $image->getClientOriginalExtension();
      $location = public_path('images/uploads');
      $image->move($location, $filename);
      // Image::make($image)->resize(800, 400)->save($location);
      $home->image = $filename;
    }
    $home->about=$request->about;
    $home->web=$request->web;
    $home->brand=$request->brand;
    $home->delivery=$request->delivery;
    $home->save();
    $request->session()->flash('message','Data Updated');
    return back();
  }
  public function adminPortfolio(Request $request)
  {
    $ports = Portfolio::all();
  	return view('Admin.portfolio')
          ->with('ports',$ports);
  }
  public function adminPortfoliostore(PortfolioRequest $request)
  {
    $port=new Portfolio();
    $port->portfolio=$request->portfolio;
    $port->heading1=$request->heading1;
    if ($request->hasFile('site1image')) {
      $image1 = $request->file('site1image');
      $filename = time().'images-1.' . $image1->getClientOriginalExtension();
      $location = public_path('images/uploads');
      $image1->move($location, $filename);
      // Image::make($image)->resize(800, 400)->save($location);
      $port->site1image = $filename;
    }
    $port->sitelink1=$request->sitelink1;
    $port->heading2=$request->heading2;
    if ($request->hasFile('site2image')) {
      $image2 = $request->file('site2image');
      $filename1 = time().'images-2.' . $image2->getClientOriginalExtension();
      $location1 = public_path('images/uploads');
      $image2->move($location1, $filename1);
      // Image::make($image)->resize(800, 400)->save($location);
      $port->site2image = $filename1;
    }
    $port->sitelink2=$request->sitelink2;
    $port->heading3=$request->heading3;
    if ($request->hasFile('site3image')) {
      $image3 = $request->file('site3image');
      $filename2 =time().'images-3.' . $image3->getClientOriginalExtension();
      $location2 = public_path('images/uploads');
      $image3->move($location2, $filename2);
      // Image::make($image)->resize(800, 400)->save($location);
      $port->site3image = $filename2;
    }
    $port->sitelink3=$request->sitelink3;
    $port->save();
    $request->session()->flash('message','Data Inserted');
    return back();
  }
  public function adminPortfolioedit(Request $request,$id)
  {
    $ports=Portfolio::where('id',$id)
                    ->get();
    return view('Admin.portfolio')
          ->with('ports',$ports)
          ->with('id',$id);
  }
  public function adminPortfolioupdate(Request $request,$id)
  {
    $port=Portfolio::find($request->id);
     $port->portfolio=$request->portfolio;
    $port->heading1=$request->heading1;
    if ($request->hasFile('site1image')) {
      $image1 = $request->file('site1image');
      $filename = time().'images-1.' . $image1->getClientOriginalExtension();
      $location = public_path('images/uploads');
      $image1->move($location, $filename);
      // Image::make($image)->resize(800, 400)->save($location);
      $port->site1image = $filename;
    }
    $port->sitelink1=$request->sitelink1;
    $port->heading2=$request->heading2;
    if ($request->hasFile('site2image')) {
      $image2 = $request->file('site2image');
      $filename1 = time().'images-2.' . $image2->getClientOriginalExtension();
      $location1 = public_path('images/uploads');
      $image2->move($location1, $filename1);
      // Image::make($image)->resize(800, 400)->save($location);
      $port->site2image = $filename1;
    }
    $port->sitelink2=$request->sitelink2;
    $port->heading3=$request->heading3;
    if ($request->hasFile('site3image')) {
      $image3 = $request->file('site3image');
      $filename2 =time().'images-3.' . $image3->getClientOriginalExtension();
      $location2 = public_path('images/uploads');
      $image3->move($location2, $filename2);
      // Image::make($image)->resize(800, 400)->save($location);
      $port->site3image = $filename2;
    }
    $port->sitelink3=$request->sitelink3;
    $port->save();
    $request->session()->flash('message','Data Updated');
    return back();
  }
  public function adminAbout(Request $request)
  {
    $abouts= About::all();
  	return view('Admin.about')
          ->with('abouts',$abouts);
  }
  public function aboutStore(AboutRequest $request)
  {
    $about = new About();
    if ($request->hasFile('image')) {
    $image = $request->file('image');
    $filename = time() . '.' . $image->getClientOriginalExtension();
    $location = public_path('images/uploads');
    $image->move($location, $filename);
    // Image::make($image)->resize(800, 400)->save($location);
    $about->image = $filename;
   }
    $about->heading=$request->heading;
    $about->htext=$request->htext;
    $about->save();
    $request->session()->flash('message','Data Inserted');
    return back();
  }
  public function aboutedit(Request $request,$id)
  {
    $abouts= About::where('id',$id)
                    ->get();
    return view('Admin.about')
            ->with('abouts',$abouts);
  }
  public function aboutupdate(Request $request,$id)
  {
    $about=About::find($request->id);
    if ($request->hasFile('image')) {
    $image = $request->file('image');
    $filename = time() . '.' . $image->getClientOriginalExtension();
    $location = public_path('images/uploads');
    $image->move($location, $filename);
    // Image::make($image)->resize(800, 400)->save($location);
    $about->image = $filename;
   }
    $about->heading=$request->heading;
    $about->htext=$request->htext;
    $about->save();
    $request->session()->flash('message','Data Updated');
    return back();
  }
  public function adminFooter(Request $request)
  {
    $footers= Footer::all();
  	return view('Admin.footer')
          ->with('footers',$footers);
  }
  public function footerStore(FooterRequest $request)
  {
    $footer = new Footer();
    $footer->facebook=$request->facebook;
    $footer->instagram=$request->instagram;
    $footer->twitter=$request->twitter;
    $footer->save();
    $request->session()->flash('message',"Data Inserted");
    return back();
  }
  public function footeredit(Request $request,$id)
  {
    $footers = Footer::where('id',$id)
              ->get();
    return view('Admin.footer')
          ->with('footers',$footers);
  }
  public function footerupdate(Request $request,$id)
  {
    $footer=Footer::find($request->id);
    $footer->facebook=$request->facebook;
    $footer->instagram=$request->instagram;
    $footer->twitter=$request->twitter;
    $footer->save();
    $request->session()->flash('message',"Data Updated");
    return back();
  }
    
}
