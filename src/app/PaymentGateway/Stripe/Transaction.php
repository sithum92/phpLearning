<?php

declare(strict_types=1);

namespace PaymentGateway\Stripe;

class Transaction 
{
    public static int $count = 0;

    public function __construct()
    {

    }
    public function process() {
        // Logic for processing a transaction with Paddles payment gateway
        echo 'Working on Stripe';
    }
}
