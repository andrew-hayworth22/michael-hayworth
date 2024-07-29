<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperienceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => ["required", "string", "max:150"],
            "company" => ["required", "string", "max:150"],
            "company_url" => ["required", "string", "max:300"],
            "location" => ["required", "string", "max:100"],
            "type" => ["required", "string", "max:50"],
            "time_frame" => ["required", "string", "max:50"],
            "bullet_points" => ["required", "string"],
            "tags" => ["required", "string", "max:500"],
        ];
    }
}
