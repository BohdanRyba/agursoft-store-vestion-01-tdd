<?php
declare(strict_types=1);

namespace Tests\Feature;

use App\Billing\FakePaymentGateway;
use App\Billing\PaymentGateway;
use App\Models\Concert;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class PurchaseTicketsTest extends TestCase
{
    use DatabaseMigrations;

    private FakePaymentGateway $paymentGateway;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->paymentGateway = new FakePaymentGateway();
        $this->app->instance(PaymentGateway::class, $this->paymentGateway);

    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_customer_can_purchase_concert_tickets()
    {
        /*
         * Arrange
         * Create concert
         */
        $concert = Concert::factory()->published()->create(['ticket_price' => 3250]);

        /*
         * Act
         * Purchase concert tickets
         */

        $customerData = $this->json('POST', "/concerts/{$concert->id}/orders", [
            'email' => 'user@user.com',
            'quantity' => 3,
            'payment_token' => $this->paymentGateway->getValidTestToken(),
        ]);

//        9750


        /*
         * Assert
         * Make sure the customer was charged the correct amount
         * Make sure that an order exists for this customer
         */
        $customerData->assertStatus(201);


        $this->assertEquals(9750, $this->paymentGateway->totalCharges());

        /*
         * Make sure that an order exists for this customer
         */

        $order = $concert->orders()->where('email', 'user@user.com')->first();
        $this->assertNotNull($order);
        $this->assertEquals(3, $order->tickets()->count());
    }

    public function test_email_is_required_for_concert_tickets()
    {
//        $this->disableExceptionHandling();

        $concert = Concert::factory()->create();

        $response = $this->json('POST', "/concerts/{$concert->id}/orders", [
            'quantity' => 3,
            'payment_token' => $this->paymentGateway->getValidTestToken(),
        ]);

        $response->assertStatus(422);
    }


    public function test_can_order_concert_tickets()
    {
        $concert = Concert::factory()->create();

        $order = $concert->orderTickets('user@user.com', 3);

        $this->assertEquals('user@user.com', $order->email);
        $this->assertEquals(3, $order->tickets()->count());

    }
}
