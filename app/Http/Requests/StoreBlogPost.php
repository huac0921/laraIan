<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
{
    //php artisan make:request StoreBlogPost


    /**
     * Determine if the user is authorized to make this request.
     *
     * 判断用户是否有权限做出此请求。
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     * 存在的意义是为了在controller传入请求时候不用再过滤参数。。。
     * controller里 store(Request $request)=>(StoreBlogPost $request)
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ];
    }
}
