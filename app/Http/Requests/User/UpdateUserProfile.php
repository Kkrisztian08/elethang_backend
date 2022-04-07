<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfile extends FormRequest
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
            'name' => 'string|max:255',
            'username' => 'string|max:255',
            'birthday' => 'date',
            'address' => 'string|max:255',
            'phone_number' => 'string|max:255',
            'email' => 'email',
        ];
    }
}
