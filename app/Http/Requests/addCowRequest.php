<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addCowRequest extends FormRequest
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
            "img1"=>"required",
            "img2"=>"required",
            "img3"=>"required",
            "img4"=>"required",
            "img5"=>"required",
            "img6"=>"required",
            "video"=>"required",
            "price"=>'required',
            "breed"=>"required",
            "area"=>"required",
            "taluka"=>"required",
            "city"=>"required",
            "district"=>"required",
            "pincode"=>"required",
            "areyou"=>"required",
            "breed_type"=>'required',
            'vacinated'=>'required',
            'tag_num'=>'required | unique:ads',
        ];
    }
}
