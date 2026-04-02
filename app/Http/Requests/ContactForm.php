<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactForm extends FormRequest
{
    public function rules(): array
    {
        return [
            "name" => "required|string|min:2",
            "email" => "required|email|",
            "message" => "required|min:3|string"
        ];
    }
}
