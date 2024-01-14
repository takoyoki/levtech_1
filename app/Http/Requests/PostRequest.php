<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return ['post.title' => 'required|string|max:100',
                'post.body' => 'required|string|max:4000',
        ];
    }
    
    public function messages()
    {
        return [
            'post.title.required' => 'タイトルは必須項目です。',
            'post.title.string' => '文字列で記入してください。',
            'post.title.max' => 'タイトルは100文字以内で入力してください。',
            'post.body.required' => '本文は必須項目です。',
            'post.body.string' => '文字列で記入してください。',
            'post.body.max' => 'タイトルは4000文字以内で入力してください。',
        ];
    }
}
