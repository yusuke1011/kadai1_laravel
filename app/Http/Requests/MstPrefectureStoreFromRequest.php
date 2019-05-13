<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MstPrefectureStoreFromRequest extends FormRequest
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
            'prefecture_cd'=>['required','string','max:2','unique:mst_prefectures','regex:/^([0-9]{2})$/'],
            'prefecture_name'=>['required','string','max:20','regex:/^[ぁ-んァ-ヶー一-龠]+$/u']
            // regex:/^[^\x01-\x7E\x{FF61}-\x{FF9F}]+$/u]
            // regex:/^[0-9]+$/
        ];
    }



    public function messages(){
       return [
        'prefecture_cd.required'=>'地域コードは必須です。',
        'prefecture_cd.max'=>'地域コードは2桁です',
        'prefecture_cd.unique'=>'地域コードがダブっています',
        'prefecture_cd.regex'=>'地域コードが不正です',
        'prefecture_name.regex'=>'地域名は全角のみです',
        'prefecture_name.required'=>'地域名が不正です',
       ];

    }
}
