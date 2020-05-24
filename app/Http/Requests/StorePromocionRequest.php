<?php

namespace bodega\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePromocionRequest extends FormRequest
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
            'ptema' => 'required|string',
            'pcosto' => 'required|string',
            'pfecha' => 'required',
            //|after_or_equal:fechaInicial
            'pnsesion' => 'required',
            'pdet' => 'required',

        ];
    }
}
