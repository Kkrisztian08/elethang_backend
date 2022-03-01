<?php

namespace App\Http\Requests\Cat;

use Illuminate\Foundation\Http\FormRequest;

class CatUpdate extends FormRequest
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
            'name' => 'string|required|max:255',
            'gender' => 'string|required|max:255',
            'likely_bday' => 'string|required',
            'external_property' => 'string|required|max:255',
            'description' => 'string|required',
            'interest' => 'numeric|integer|required',
            //
        ];
    }
}
