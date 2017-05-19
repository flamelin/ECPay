<?php

namespace flamelin\ECPay;

use flamelin\ECPay\EcpayFactory;

class Ecpay
{

    private $instance = null;
    private $logistics_instance = null;
    //--------------------------------------------------------

    public function __construct()
    {
        $this->instance = new EcpayFactory();
        $this->logistics_instance = new EcpayLogisticsFactory();
        // env('APP_PAY_TEST')? $this->setForTest(): $this->setForProd();

    }

    public function instance()
    {
        return $this->instance;
    }

    public function i()
    {
        return $this->instance;
    }

    public function il()
    {
      return $this->logistics_instance;
    }

    private function setForTest()
    {
        // $this->instance->ServiceURL = 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V2';
        // $this->instance->HashKey = '5294y06JbISpM5x9';
        // $this->instance->HashIV = 'v77hoKGq4kWxNNIS';
        // $this->instance->MerchantID = '2000132';
    }

    private function setForProd()
    {
        // $this->instance->ServiceURL = config('ecpay.ServiceURL');
        // $this->instance->HashKey = config('ecpay.HashKey');
        // $this->instance->HashIV = config('ecpay.HashIV');
        // $this->instance->MerchantID = config('ecpay.MerchantID');
    }
}
