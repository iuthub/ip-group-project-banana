<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role([

        	'name' => "administrator",
        ]);

        $role->save();

        $role = new Role([

        	'name' => "customer",
        ]);

        $role->save();
    }
}
