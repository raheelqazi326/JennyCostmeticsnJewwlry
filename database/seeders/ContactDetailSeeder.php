<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactDetail;
use App\Models\Phone;

class ContactDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ContactDetail::truncate();
        $contactDetail = new ContactDetail;
        $contactDetail->line_1 = "House #123, Unknown Street";
        $contactDetail->line_2 = "P.O. Box 1234";
        $contactDetail->email = 'info@'.env('APP_Domain_Name');
        $contactDetail->save();
        $phone = new Phone;
        $phone->refModule_type = get_class($contactDetail);
        $phone->refModule_id = $contactDetail->id;
        $phone->number = "0123456789";
        $phone->save();
    }
}
