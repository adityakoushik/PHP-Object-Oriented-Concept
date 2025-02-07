<?php
require_once 'PaymentGateway.php';
class CreditCard implements PaymentGateway
{
	public function processPayment($amount)
	{
		echo "Processing Credit Card payment of $$amount.<br>";
	}
}