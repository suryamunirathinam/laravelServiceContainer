<?php


namespace App\Orders;


use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGateayContract;

class OrderDetails
{
    private $paymentGateway;
    public function __construct(PaymentGateayContract $paymentGateway)
    {
        $this->paymentGateway =$paymentGateway;
    }
    public function all(){
        $this->paymentGateway->setDiscount(500);

        return [
            'name' => 'surya',
            'address' => 'dsasd/asda street',
        ];
    }
}
