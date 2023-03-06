<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SwiftCodeVerificationRequest extends FormRequest
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
            "code" => ["required", "regex:/^([A-Za-z0-9]{11}|[A-Za-z0-9]{8})+$/i"]
        ];
    }

    public function messages()
    {
        return [
            'code.regex' => 'SWISS Code format is incorrect. Make sure that the SWIFT Code follows the proper format. The length is 8 or 11 characters without dashes or spaces.',
        ];
    }
}
