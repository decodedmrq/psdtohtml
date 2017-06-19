<?php

namespace App\Http\Requests;

use App\Models\Guest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class GuestStoreRequest extends FormRequest
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
            'email' => 'required|email|unique:guests,email',
            'name' => 'nullable|string|max:50',
            'gender' => 'nullable|numeric|in:' . Guest::getGendersString(),
            'phone' => 'nullable|string',
            'dob' => 'nullable|datetime',
        ];
    }

    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return response_json(null, false, $errors);
        }

        return new JsonResponse($errors, 422);
    }
}
