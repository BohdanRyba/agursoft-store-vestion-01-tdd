<?php

namespace App\Billing\LiqPay\Contracts;

interface LiqpayServiceInterface
{

    public function getForm(int $amount);
}
