<?php

// require __DIR__ .'/../../vendor/autoload.php';
 require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../app/PaymentGateway/Paddle/Transaction.php';

use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
use PaymentGateway\Paddle\Transaction;
use App\Enums\Status;

// use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;

// $paddleTransaction = new PaddleTransaction();

// var_dump($paddleTransaction);


// $id = new \Ramsey\Uuid\UuidFactory();

// echo $id->uuid4();

// echo PaddleTransaction::STATUS_PAID;

$transaction = new PaddleTransaction();
$transaction->setStatus(Status::DECLINED);
var_dump($transaction);

