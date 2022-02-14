<?php

namespace Tec\Payment\Http\Requests;

use Tec\Payment\Enums\PaymentStatusEnum;
use Tec\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class UpdatePaymentRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status' => Rule::in(PaymentStatusEnum::values()),
        ];
    }
}
