<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderStatus;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $orderStatus = new OrderStatus;
        $orderStatus->status = 'pending';
        $orderStatus->message = 'Pending';
        $orderStatus->save();
        
        $orderStatus = new OrderStatus;
        $orderStatus->status = 'confirm';
        $orderStatus->message = 'Confirmed';
        $orderStatus->save();

        $orderStatus = new OrderStatus;
        $orderStatus->status = 'cheque';
        $orderStatus->message = 'Waiting For Cheque';
        $orderStatus->save();
        
        $orderStatus = new OrderStatus;
        $orderStatus->status = 'cancel';
        $orderStatus->message = 'Cancelled';
        $orderStatus->save();
        
        $orderStatus = new OrderStatus;
        $orderStatus->status = 'dispatch';
        $orderStatus->message = 'Dispatched';
        $orderStatus->save();
        
        $orderStatus = new OrderStatus;
        $orderStatus->status = 'deliver';
        $orderStatus->message = 'Delivered';
        $orderStatus->save();
        
        $orderStatus = new OrderStatus;
        $orderStatus->status = 'return';
        $orderStatus->message = 'Return';
        $orderStatus->save();
        
        $orderStatus = new OrderStatus;
        $orderStatus->status = 'closed';
        $orderStatus->message = 'Order Closed';
        $orderStatus->save();
    }
}
