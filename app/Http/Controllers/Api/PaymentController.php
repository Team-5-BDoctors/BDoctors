<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderRequest;
use App\Sponsorship;
use Illuminate\Http\Request;
use Braintree\Gateway;

class PaymentController extends Controller
{
    public function generate(Request $request, Gateway $gateway){
        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token
        ];
        return response()->json($data,200);
    }

    public function makePayment(OrderRequest $request, Gateway $gateway){

        $product = Sponsorship::find($request->product);

        $result = $gateway->transaction()->sale([
            'amount' => $product->price,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if($result->success){
            $data = [
                'success' => true,
                'message' => 'Transazione eseguita con successo'
            ];
            return response()->json($data,200);
        } else {
            $data = [
                'success' => false,
                'message' => "Transazione fallita"
            ];
            return response()->json($data,401);
        }
    }
}
