<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;

class ServicePayPalController extends Controller
{
    // public function handleWebhook(Request $request)
    // {
    //     $data = $request->all();

    //     // Log it for debug (optional)
    //     Log::info('PayPal Webhook:', $data);

    //     // Validate that we received what we expect
    //     if (!isset($data['event_type']) || !isset($data['resource'])) {
    //         return response()->json(['status' => 'Invalid payload'], 400);
    //     }

    //     $resource = $data['resource'];

    //     $payment = new Payment();
    //     $payment->order_id = $resource['id'] ?? '';
    //     $payment->payer_id = $resource['payer']['payer_id'] ?? '';
    //     $payment->amount = $resource['amount']['value'] ?? 0;
    //     $payment->currency = $resource['amount']['currency_code'] ?? 'USD';
    //     $payment->plan = 'unknown'; // You'll set this in your frontend via metadata (see note below)
    //     $payment->details = json_encode($data);
    //     $payment->save();

    //     return response()->json(['status' => 'Payment saved']);
    // }


    public function handleWebhook(Request $request)
    {
        $data = $request->all();

        // Log incoming data
        Log::info('PayPal Webhook:', $data);

        // Save to DB
        $payment = new Payment();
        $payment->order_id = $data['orderID'] ?? '';
        $payment->payer_id = $data['payerID'] ?? '';
        $payment->amount = $data['amount'] ?? 0;
        $payment->currency = $data['details']['purchase_units'][0]['amount']['currency_code'] ?? 'USD';
        $payment->plan = $data['plan'] ?? 'unknown';
        $payment->details = json_encode($data);
        $payment->save();

        return response()->json(['status' => 'Payment saved']);
    }
}
