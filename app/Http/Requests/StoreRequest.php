<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        $updateMode = false;

        return [
            'name' => 'required',
            'slug' => $updateMode
                ? 'required'
                : 'nullable',
            'city' => 'required',
            'address' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'website' => parse_url($this->website, PHP_URL_SCHEME)
                ? $this->website
                : 'http://' . $this->website
        ]);
    }
}
