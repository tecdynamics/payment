<?php

namespace Tec\Payment\Repositories\Caches;

use Tec\Support\Repositories\Caches\CacheAbstractDecorator;
use Tec\Payment\Repositories\Interfaces\PaymentInterface;

class PaymentCacheDecorator extends CacheAbstractDecorator implements PaymentInterface
{

}
