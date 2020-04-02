<?php

namespace bodega\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdRequest extends FormRequest
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
            'codigo'=>'required',
            'nom'=>'required',
            'cate'=>'required',
            'neto'=>'required',
            'cant'=>'required',
            'stock'=>'required',
            'formula'=>'required',
            'imagen'=>'required|image',
            
        ];
    }
}
