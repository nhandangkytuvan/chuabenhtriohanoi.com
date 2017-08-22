<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
    	switch($this->method())
        {
            case "POST":
                return [
                    'name' => 'required|unique:posts,name',
                    'term_id' =>'required'
                ];
            case "PUT":
                return [
                    'name' => 'required|unique:posts,name,'.$this->post->id,
                    'term_id' =>'required'
                ];
            default:
                break;
        }
        // return [
        //     'name' => 'required',
        //     'term_id' =>'required'
        // ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Tên bài viết yêu cầu nhập...',
            'name.unique' => 'Tên bài viết đã tồn tại...',
            'term_id.required' => 'Chọn mục cho bài...',
        ];
    }
}
