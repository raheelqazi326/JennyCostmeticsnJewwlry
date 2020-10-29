<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = Role::where('name', 'admin')->first();
        $user = new User;
        $user->role_id = $role->name;
        $user->name = 'admin';
        $user->email = 'admin@'.env('APP_Domain_Name');
        $user->password = bcrypt('123456');
        $user->status = 'active';
        $user->save();
        // $user = 
    }
}
