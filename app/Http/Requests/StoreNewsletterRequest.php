<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsletterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(auth()->check()) return true;
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject'=>'required',
            'from_name'=>'nullable',
            'from_email'=>'nullable',
            'reply_to'=>'nullable',
            'template'=>'required',
            'status'=>'required|boolean',
            'send_count'=>'nullable',
        ];
    }
}
