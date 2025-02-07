<?php

interface PaymentGateway
{
	public function processPayment($amount);
}