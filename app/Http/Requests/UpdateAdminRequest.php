<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            "email" => "required|email|unique:admins,email," . $this->route("admin")->id,
            "image" => 'nullable|image',
            "phone" => "nullable|numeric|unique:admins,phone," . $this->route("admin")->id,
            "password" => "nullable",
            "password_confirmation" => "same:password"
        ];
    }
}
