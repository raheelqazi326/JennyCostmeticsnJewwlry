<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactDetail;

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
        $contactDetail = new ContactDetail;
        $contactDetail->line_1 = "House #123, Unknown Street";
        $contactDetail->line_2 = "P.O. Box 1234";
        $contactDetail->city_id;
        $contactDetail->zipcode;
        $contactDetail->email = 'info@'.env('APP_Domain_Name');
        $phone->number = "(012) 345-6789";
    }
}
