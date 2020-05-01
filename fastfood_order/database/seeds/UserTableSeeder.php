<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([

          'name' => 'Administrator1',
          'email' => 'Administrator1@email.com',
          'password' => bcrypt('Administrator1'),
          'phone' => '+998-55-4568877',
          'date_of_birth' => '25-09-1985',
          'postal_code' => 130114,
          'city' => 'Tashkent',
          'passport' => 'AA5369944',
          'role_id' => 1,
        ]);

        $user->save();

        $user = new User([

          'name' => 'Customer1',
          'email' => 'Customer1@email.com',
          'password' => bcrypt('Customer1'),
          'phone' => '+998-91-5957788',
          'date_of_birth' => '01-10-1993',
          'postal_code' => 130116,
          'city' => 'Tashkent',
          'passport' => 'AA5376878',
          'role_id' => 2,
        ]);

        $user->save();
    }
}