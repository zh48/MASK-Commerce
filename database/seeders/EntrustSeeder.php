<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin', 'display_name' => 'Administration', 'description' => 'Administration', 'allowed_route' => 'admin']);
        $SuperVisorRole = Role::create(['name' => 'SuperVisorRole', 'display_name' => 'SuperVisorRole', 'description' => 'SuperVisorRole', 'allowed_route' => 'admin']);
        $CustomeroRole = Role::create(['name' => 'admin', 'display_name' => 'CustomeroRole', 'description' => 'CustomeroRole', 'allowed_route' => null ]);


        $admin = User::create(['first_name' => 'Khalid','last_name' => 'Alhouthaifi','mobile' => '737070038','status' => '1','email' => 'kaled511999@gmail.com','user_image' => null,'email_verified_at' => now(),'password' =>  bcrypt('123'),'remember_Token' => Str::random(10)]);
        $admin->attachRole($adminRole);

        $SuperVisor = User::create(['first_name' => 'Super','last_name' => 'VisorRole','mobile' => '770886948','status' => '1','email' => 'khloood0o0o7@gmail.com','user_image' => null,'email_verified_at' => now(),'password' =>  bcrypt('123'),'remember_Token' => Str::random(10)]);
        $admin->attachRole($SuperVisor);

        $Customer = User::create(['first_name' => 'Saad','last_name' => 'Fuad','mobile' => '71771717','status' => '1','email' => 'sadfuad717@gmail.com','user_image' => null,'email_verified_at' => now(),'password' => bcrypt('123'),'remember_Token' => Str::random(10)]);
        $admin->attachRole($CustomeroRole);



    }
}
