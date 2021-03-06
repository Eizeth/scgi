<?php

namespace bodega\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSucursalRequest extends FormRequest
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
            'snom' => 'required',
            'sencar' => 'required',
            'sdir' => 'required',
            'stel' => 'required|numeric',
            //regex:/^[0-9]{10}$/
        ];
    }
}
