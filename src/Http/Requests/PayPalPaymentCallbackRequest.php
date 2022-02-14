<?php

namespace Tec\Payment\Http\Requests;

use Tec\Support\Http\Requests\Request;

class PayPalPaymentCallbackRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'amount'   => 'required|numeric',
            'currency' => 'required',
        ];
    }
}
