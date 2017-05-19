<?php

namespace flamelin\ECPay\Facade;

use Illuminate\Support\Facades\Facade;
use flamelin\ECPay\EcpayLogistics as EcpayLogisticsContract;


class EcpayLogistics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return EcpayLogisticsContract::class;
    }
}
