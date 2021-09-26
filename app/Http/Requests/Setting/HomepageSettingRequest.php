<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class HomepageSettingRequest extends FormRequest
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
            'hp_our_excellence_section_title' => 'nullable',

            'hp_our_excellence_one_title' => 'nullable',
            'hp_our_excellence_one_icon' => 'nullable',
            'hp_our_excellence_one_desc' => 'nullable',
            'hp_our_excellence_one_link' => 'nullable',

            'hp_our_excellence_two_title' => 'nullable',
            'hp_our_excellence_two_icon' => 'nullable',
            'hp_our_excellence_two_desc' => 'nullable',
            'hp_our_excellence_two_link' => 'nullable',

            'hp_our_excellence_three_title' => 'nullable',
            'hp_our_excellence_three_icon' => 'nullable',
            'hp_our_excellence_three_desc' => 'nullable',
            'hp_our_excellence_three_link' => 'nullable',

            'hp_our_excellence_four_title' => 'nullable',
            'hp_our_excellence_four_icon' => 'nullable',
            'hp_our_excellence_four_desc' => 'nullable',
            'hp_our_excellence_four_link' => 'nullable',
        ];
    }
}
