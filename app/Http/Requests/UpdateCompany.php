<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompany extends FormRequest
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
               'name' => 'required|min:5|max:15',
                'address' => 'required',
                'postalCode' => 'required',
                'province' => 'required',
                'country' => 'required',
                'contactNumber' => 'required|min:9|max:10',
                'email' => 'required|min:5|max:60|email|unique:companies,email,'. $this->admincompany,
                'url' => 'required',
                'bankNumber' => 'required|min:14|max:20',
        ];
    }
}
