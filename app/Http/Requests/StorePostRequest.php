<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'img2'=>'required',
            'img3'=>'required',
            'img4'=>'required',
            'img5'=>'required',
            'img6'=>'required',
            'video'=>"required",
            'area'=>'required',
            'taluka'=>'required',
            'district'=>'required',
            'city'=>'required',
            'pincode'=>'required',
            'state'=>'required',
            'price'=>'required',
            'breed'=>'required',
            'breed_type'=>'required',
            'areyou'=>'required',
            'vacinated'=>'required',
        ];
    }
}
