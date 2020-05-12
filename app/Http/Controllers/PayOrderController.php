<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGateayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
//    public function store(OrderDetails $orderDetails, BankPaymentGateway $paymentGateway){
//        cant pass currency while using reflection so use app service provider inside register define a method
//        $paymentGateway = new BankPaymentGateway('usd');

    public function store(OrderDetails $orderDetails, PaymentGateayContract $paymentGateway){

        $order = $orderDetails->all();


        dd($paymentGateway->charge(2000));
    }
}
