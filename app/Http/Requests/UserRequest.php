<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
<<<<<<< HEAD
            'text' => 'required|min:4'
        ];
    }

    public function messages(){
        return [
            'text.required'=> "can't left empty....",
            'text.min'=> "must be at least 3 ch...."
        ];
    }
=======
            'username' => 'required|min:4',
            'password' => 'required|min:4'
        ];
    }  
>>>>>>> e4024cf394f3022ba5ec573316edfa1aac74d6c5
}
