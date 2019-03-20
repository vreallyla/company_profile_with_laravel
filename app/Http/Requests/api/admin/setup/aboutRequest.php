<?php

namespace App\Http\Requests\api\admin\setup;

use Illuminate\Foundation\Http\FormRequest;

class aboutRequest extends FormRequest
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
            'img' => 'image',
            'logo' => 'image',
            'company_name' => 'required|min:3|max:50',
            'quote' => 'required|min:6|max:60',
            'short_info' => 'required|min:10|max:191',
            'history' => 'required|min:10|max:1500',
            'intro' => 'required|min:10|max:1500',
            'vision' => 'required|min:10|max:1500',
            'mission' => 'required|min:10|max:1500',
        ];
    }
}
