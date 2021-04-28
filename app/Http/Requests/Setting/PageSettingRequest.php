<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class PageSettingRequest extends FormRequest
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
            'about_us_page_url' => 'nullable',
            'privacy_policy_page_url' => 'nullable',
            'terms_and_conditions_page_url' => 'nullable',

            'contact_us_section_title' => '',
            'contact_us_section_description' => '',
        ];
    }
}
