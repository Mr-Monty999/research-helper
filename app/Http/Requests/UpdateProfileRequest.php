<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            "name" => "required|string",
            "email" => "required|email|unique:admins,email," . auth()->guard("admin")->id(),
            "image" => 'nullable|image',
            "phone" => "nullable|numeric|unique:admins,phone," . auth()->guard("admin")->id(),
            "old_password" => "required_with:new_password",
            "new_password" => "required_with:old_password"

        ];
    }
}
