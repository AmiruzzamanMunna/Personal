<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'facebook' => 'required|unique:tbl_footer,facebook',
            'instagram' => 'required|unique:tbl_footer,instagram',
            'twitter' => 'required|unique:tbl_footer,twitter',
        ];
    }
    public function messages()
    {
        return[
            'facebook.required'=>'Enter the Facebok URL',
            'instagram.required'=>'Enter the Instagram URL',
            'twitter.required'=>'Enter the Twitter URL',
        ];
    }
}
