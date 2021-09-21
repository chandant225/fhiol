<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $updateMode = $this->product_id ? true : false;

        return [
            'name' => 'required',
            'slug' => $updateMode
                ? 'required'
                : 'nullable',
            'sub_title' => 'nullable',
            'overview' => 'nullable',
            'detail' => 'nullable',
            'description' => 'nullable',
            'category_id' => 'required',
            'image' => $updateMode
                ? 'nullable'
                : 'nullable',
            'features' => 'nullable',
            'video_url' => 'nullable',
            'downloads' => 'nullable',
        ];
    }
}
