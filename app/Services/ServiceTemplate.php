<?php
// app/Services/PaymentService.php

namespace App\Services;

class ServiceTemplate
{
    public function processPayment($order)
    {
        // Logika pembayaran, misalnya menghitung total, memanggil API payment gateway, dll
        return "Processing payment for order #" . $order->id;
    }
}
