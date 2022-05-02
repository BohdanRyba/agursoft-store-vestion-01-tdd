<?php
declare(strict_types=1);

namespace App\Billing;

use Illuminate\Support\Collection;

class FakePaymentGateway implements PaymentGateway
{
    /**
     * @var Collection $charges
     */
    private Collection $charges;

    public function __construct()
    {
        $this->charges = collect();
    }

    /**
     * @return string
     */
    public function getValidTestToken(): string
    {
        return 'fake-token';
    }

    /**
     * {@inheritdoc}
     */
    public function charge(int $amount, string $token)
    {
        $this->charges[] = $amount;
    }

    /**
     * @return mixed
     */
    public function totalCharges(): mixed
    {
        return $this->charges->sum();
    }
}
