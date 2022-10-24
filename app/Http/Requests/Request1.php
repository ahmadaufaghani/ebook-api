<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class Request1 extends FormRequest
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
            'name' => 'required',
            'date_of_birth' =>'required',
            'place_of_birth' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'hp' => 'required'
        ];
    }
    
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                    "status" => 404,
                    "data" => [],
                    "error"=>$validator->errors()
            ])
        );
    }
}
