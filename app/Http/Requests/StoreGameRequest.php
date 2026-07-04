<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'max:255'],
            'slug' => ['nullable', 'max:255'],
            'description' => ['nullable', 'string'],
            'cover' => ['nullable', 'url'],
            'release_year' => ['nullable', 'integer'],
            'publisher' => ['nullable', 'max:255'],
            'developer' => ['nullable', 'max:255'],
            'is_active' => ['nullable', 'boolean'],
            'platform_id' => ['required', 'exists:platforms,id'],
            'size_gb' => ['required', 'numeric', 'min:0'],
            'genre_id' => ['required', 'exists:genres,id'],
        ];
    }
}
