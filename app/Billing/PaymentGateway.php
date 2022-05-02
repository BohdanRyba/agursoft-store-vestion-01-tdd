<?php
declare(strict_types=1);

namespace App\Billing;

interface PaymentGateway
{

    /**
     * @param int $amount
     * @param string $token
     */
    public function charge(int $amount, string $token);
}
