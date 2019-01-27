<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'portfolio'=>'required',
            'site1image'=>'required',
            'sitelink1'=>'required',
            'site2image'=>'required',
            'sitelink2'=>'required',
        ];
    }
}
