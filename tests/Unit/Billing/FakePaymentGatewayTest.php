<?php
declare(strict_types=1);

namespace Tests\Unit\Billing;

use App\Billing\FakePaymentGateway;
use PHPUnit\Framework\TestCase;

class FakePaymentGatewayTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_charges_with_a_valid_token_are_successful()
    {
        $paymentGateway = new FakePaymentGateway;

        $paymentGateway->charge(2500, $paymentGateway->getValidTestToken());

        $this->assertEquals(2500, $paymentGateway->totalCharges());

    }
}
