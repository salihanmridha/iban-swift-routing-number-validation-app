<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IbanNumberVerificationRequest extends FormRequest
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
            "number" => ["required", "regex:/^([A-Z]{2}[ \-]?[0-9]{2})(?=(?:[ \-]?[A-Z0-9]){9,30}$)((?:[ \-]?[A-Z0-9]{3,5}){2,7})([ \-]?[A-Z0-9]{1,3})?+$/i"]
        ];
    }

    public function messages()
    {
        return [
            'number.regex' => 'IBAN format is incorrect. Make sure that the IBAN follows the proper IBAN format. The first 2 characters must be letters & the next 2 characters must be numbers. The length is up to 34 characters long.',
        ];
    }
}
