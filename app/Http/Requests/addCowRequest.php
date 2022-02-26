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
        return false;
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
            "file"=>"required",
            "age"=>'required',
            "price"=>'required',
            "due_month"=>"required",
            "breed"=>"required",
            "milk_cap"=>"required",
            "area"=>"required",
            "taluka"=>"required",
            "city"=>"required",
            "district"=>"required",
            "pincode"=>"required",
            "gender"=>"required",
            "pregnant"=>"required",
            

        ];
    }
}
