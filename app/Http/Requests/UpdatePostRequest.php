<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // 'code' => 'required|unique:countries,code,'.$this->country->id.'|max:3',
        return [
            'user_id' => 'required',
            'city_id' => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
            'price' => 'required|integer|min:0',
            'star' => 'required'
        ];
    }
}
