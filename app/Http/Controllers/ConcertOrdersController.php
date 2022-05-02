<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Models\Concert;
use Illuminate\Http\JsonResponse;

class ConcertOrdersController extends Controller
{
    /**
     * @var PaymentGateway $paymentGateway
     */
    private PaymentGateway $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function store(int $id): JsonResponse
    {
        $this->validate(request(), [
            'email' => 'required'
        ]);



        $concert = Concert::find($id);

        //Charging the customer
        $this->paymentGateway->charge(request('quantity') * $concert->ticket_price, request('payment_token'));

        // Creating the order
        $order = $concert->orderTickets(request('email'), request('quantity'));


        return response()->json([], 201);
    }
}
