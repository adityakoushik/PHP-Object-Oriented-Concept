<?php
require_once './classes/PayPal.php';
require_once './classes/CreditCard.php';

// define a function to use interface
function checkout(PaymentGateway $paymentMethod, $amount)
{
	$paymentMethod->processPayment($amount);
}

$paypal = new Paypal();
$creditCard = new CreditCard();

checkout($paypal, 500);
checkout($creditCard, 1000);

// echo phpversion();