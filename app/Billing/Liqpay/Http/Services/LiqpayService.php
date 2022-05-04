<?php

namespace App\Billing\LiqPay\Http\Services;

use App\Billing\LiqPay\Contracts\LiqpayServiceInterface;
use App\Billing\LiqPay\V2\LiqPay;

class LiqpayService implements LiqpayServiceInterface
{
    /**
     * @param int $amount
     * @return string
     */
    public function getForm(int $amount = 1)
    {
        return (new LiqPay(env('LIQPAY_PUB_KEY'), env('LIQPAY_PRIVATE_KEY')))
            ->cnb_form([
                'language' => 'uk',
                'version' => 3,
                'action' => 'pay',
                'amount' => $amount,
                'currency' => 'UAH',
                'description' => 'Test payment',
                'order_id' => rand(1000000, 9999999),
            ]);

    }

}
