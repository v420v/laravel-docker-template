<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// todo: 分ける
class TodoRequest extends FormRequest
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
            'content' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => '入力されていません。',
            'max' => 'max 文字以内で入力してください。',
        ];
    }
}
