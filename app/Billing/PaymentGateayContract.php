<?php

namespace App\Billing;
//interface a roadmap of how a class need to be constructed
interface PaymentGateayContract
{
    public function setDiscount($amount);

    public function charge($amount);
}
