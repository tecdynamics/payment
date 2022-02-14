<?php

namespace Tec\Payment\Services\Traits;

use Tec\Payment\Supports\PaymentHelper;

/**
 * @deprecated
 */
trait PaymentTrait
{

    /**
     * Store payment on local
     *
     * @param array $args
     * @return mixed
     * @deprecated
     */
    public function storeLocalPayment(array $args = [])
    {
        return PaymentHelper::storeLocalPayment($args);
    }
}
