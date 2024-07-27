<?php

interface PaymentInterface
{
    public function pay($payment);
}

class PagSeguroPayment implements PaymentInterface
{
    public function pay($payment)
    {
        var_dump("Pay with PagSeguro");

    }

}

class PayPalPayment implements PaymentInterface
{
    public function pay($payment)
    {
        var_dump("Pay with PayPal");

    }

}

class GerenciaNetPayment implements PaymentInterface
{
    public function pay($payment)
    {
        var_dump("Pay with GerenciaNet");

    }

}

class Client
{
    public function pay(PaymentInterface $payment)
    {
        $payment->pay($payment);

    }
}

$client = new Client();
echo $client->pay(new PayPalPayment());