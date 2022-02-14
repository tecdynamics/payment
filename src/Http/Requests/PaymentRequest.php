<?php

namespace Tec\Payment\Http\Requests;

use Tec\Base\Enums\BaseStatusEnum;
use Tec\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class PaymentRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required',
            'status' => Rule::in(BaseStatusEnum::values()),
        ];
    }
}
