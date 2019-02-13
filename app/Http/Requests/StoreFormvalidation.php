<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormvalidation extends FormRequest
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
            'name'=>'required|max:20',
            'email'=>'required|max:35',
            'phone'=>'required|numeric'

        ];
    }

    public function messages(){
        return [
        'name.required'=>'This is Name is also required',
        'name.max'=>'This is Name must be not more 20 chars',
        'email.required'=>'This is Email is also required',
        'email.max'=>'This is Email must be not more 35 chars',
        'phone.required'=>'This is Phone is also required and numeric',
        
        ];
    }
}
