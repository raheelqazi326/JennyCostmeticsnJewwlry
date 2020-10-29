<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentType;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $paymentType = new PaymentType;
        $paymentType->name = "stripe";
        $paymentType->save();

        $paymentType = new PaymentType;
        $paymentType->name = "paypal";
        $paymentType->save();
        
        $paymentType = new PaymentType;
        $paymentType->name = "cashOnDelivery";
        $paymentType->save();
        
        $paymentType = new PaymentType;
        $paymentType->name = "cheque";
        $paymentType->save();

    }
}
