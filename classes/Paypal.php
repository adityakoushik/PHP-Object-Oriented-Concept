<?php
require_once 'PaymentGateway.php';
class Paypal implements PaymentGateway
{
	public function processPayment($amount)
	{
		echo "Processing PayPal payment of $$amount.<br>";
	}
}
?>