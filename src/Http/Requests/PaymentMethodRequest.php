<?php

namespace Tec\Payment\Http\Requests;

use Tec\Support\Http\Requests\Request;

class PaymentMethodRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required|max:120',
        ];
    }
}
