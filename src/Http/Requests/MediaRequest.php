<?php

namespace DigitalTunnel\NovaMediaLibrary\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MediaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'search_text' => 'sometimes|nullable|string',
            'page' => 'sometimes|nullable|numeric',
            'per_page' => 'sometimes|nullable|numeric'
        ];
    }
}
