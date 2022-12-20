<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InteraccionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "preferencia" => "required|string|max:50",
        ];
    }

    public function messages()
    {
        return[
            'required' =>'El campo :attribute es requerido',
            'string' => 'El campo :attribute debe ser de tipo string',
            'max' => 'El campo :attribute supera el maximo permitido',
        ];
    }

}
