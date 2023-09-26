<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryFormRequest extends FormRequest
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
            'main_category_id' => 'required',
            'sub_category_name' => 'required|unique:sub_categories,sub_category|max:100',
        ];
    }

    public function messages(){
        return [
            'sub_category_name.required' => 'サブカテゴリーは必ず入力してください。',
            'sub_category_name.unique' => '登録されているメインカテゴリーは登録できません。',
            'sub_category_name.max' => '100文字以内で入力してください。',
        ];
    }
}
