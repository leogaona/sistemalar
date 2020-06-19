<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        User::create(["name"=>"Luis alberto", "email"=>"luisalb@gmail.com", "password"=>"alberto"]);
        User::create(["name"=>"Liliana", "email"=>"liligg@gmail.com", "password"=>"liliana"]); 
        */
        factory(App\User::class)->times(10)->create();
    }
}
