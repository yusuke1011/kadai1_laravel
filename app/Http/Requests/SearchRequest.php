<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'prefecture_cd'=>['nullable','regex:/^([0-9]{2})$/']
        ];
    }

    public function messages(){
        return [
            'prefecture_cd.regex'=>'検索条件が不正です',
        ];
    }
}
