<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Twilio\Rest\Client;

class WhatsAppController extends Controller
{
    

    public function handleIncoming(Request $request)
    {
        Log::info('Incoming WhatsApp Message:', $request->all());
    
        $message = strtolower($request->input('Body')); // Received message
        $from = $request->input('From'); // Sender's number
    
        if (!$message || !$from) {
            Log::error('Invalid request: Missing Body or From');
            return response()->json(['error' => 'Invalid request'], 400);
        }
    
        // Start Session (store user state)
        session_start();

        if (!isset($_SESSION['order_stage'])) {
            $_SESSION['order_stage'] = 'start';
        }

        if ($message == 'hi') {
            $_SESSION['order_stage'] = 'start';
            $reply = "Hello! Welcome to our food packaging store. Type 'products' to see our packaging options.";

        } elseif ($message == 'products') {
            $_SESSION['order_stage'] = 'select_product';
            $reply = "We offer:\n1. Burger Boxes - 50 pcs ($20)\n2. Pizza Boxes - 30 pcs ($30)\n3. Cake Boxes - 20 pcs ($25)\nReply with the product number to order.";

        } elseif ($_SESSION['order_stage'] == 'select_product' && in_array($message, ['1', '2', '3'])) {
            $_SESSION['selected_product'] = ($message == '1') ? 'Burger Boxes - 50 pcs ($20)' : (($message == '2') ? 'Pizza Boxes - 30 pcs ($30)' : 'Cake Boxes - 20 pcs ($25)');
            $_SESSION['order_stage'] = 'confirm_product';
            $reply = "You selected: {$_SESSION['selected_product']}. Type 'confirm' to proceed or 'cancel' to exit.";

        } elseif ($_SESSION['order_stage'] == 'confirm_product' && $message == 'confirm') {
            $_SESSION['order_stage'] = 'enter_quantity';
            $reply = "Enter quantity (e.g., 'qty 2' for 2 packs).";

        } elseif ($_SESSION['order_stage'] == 'enter_quantity' && str_starts_with($message, 'qty ')) {
            $_SESSION['quantity'] = (int) str_replace('qty ', '', $message);
            $_SESSION['order_stage'] = 'select_payment';
            $reply = "You selected {$_SESSION['quantity']} packs. Choose a payment method:\n1. Bank Transfer\n2. JazzCash\n3. EasyPaisa\nReply with the method number.";

        } elseif ($_SESSION['order_stage'] == 'select_payment' && in_array($message, ['1', '2', '3'])) {
            $_SESSION['payment_method'] = ($message == '1') ? 'Bank Transfer' : (($message == '2') ? 'JazzCash' : 'EasyPaisa');
            $_SESSION['order_stage'] = 'await_payment';
            $reply = "You selected: {$_SESSION['payment_method']}. Please send payment to **123456789** and type 'paid' after completing payment.";

        } elseif ($_SESSION['order_stage'] == 'await_payment' && $message == 'paid') {
            $_SESSION['order_stage'] = 'start';
            $reply = "Thank you! Your order has been confirmed. 🚚 Your packaging will be delivered soon. Type 'hi' to start a new order.";

        } elseif ($message == 'cancel') {
            $_SESSION['order_stage'] = 'start';
            $reply = "Your order has been cancelled. Type 'hi' to start again.";

        } else {
            $reply = "Sorry, I didn't understand that. Type 'hi' to start.";
        }

        
    
        Log::info("Replying to $from with message: $reply");
    
        $this->sendMessage($from, $reply);
        return response()->json(['message' => 'Reply sent']);
    }
    

    private function sendMessage($to, $message)
    {
         // $sid = env('TWILIO_SID');
        // $token = env('TWILIO_AUTH_TOKEN');
        // $whatsappNumber = env('TWILIO_WHATSAPP_FROM'); // Twilio WhatsApp Number

        $sid = 'ACea5fc2d322622c2912c8f7aa0cd4415b';
        $token = 'a8aebd5cdf9972172d08f3d673e4b061';
        $whatsappNumber = 'whatsapp:+14155238886';

       

        $client = new Client($sid, $token);
        $client->messages->create(
            $to,
            [
                "from" => $whatsappNumber,
                "body" => $message
            ]
        );
    }

}
