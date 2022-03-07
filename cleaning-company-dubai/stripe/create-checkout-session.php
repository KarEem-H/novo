<?php

require 'vendor/autoload.php';

error_reporting(1);

// \Stripe\Stripe::setApiKey('sk_test_51IxD08ARRkOUEdcXtrRUO96aheWqOCpYuEefNf73T9ndUKhjO25GjwM2jsunHaetNBsGSS74Lwr0sqKJFRt7IPZd00btbDpMDb');

\Stripe\Stripe::setApiKey('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');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $input = file_get_contents('php://input');
  $body = json_decode($input);
}

$service_name = $body->service_name;
$amount = str_replace(",","",$body->amount) * 100;

$YOUR_DOMAIN = 'https://higitech.me/cleaning-services-dubai';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'aed',
      'unit_amount' => $amount,
      'product_data' => [
        'name' => $service_name,
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.php',
  'cancel_url' => $YOUR_DOMAIN . '/failed.php',
]);

echo json_encode(['id' => $checkout_session->id]);

// echo $_POST["product_amount"];