<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['id'=>1, 'name' => 'superadmin', 'description' => 'A Superadmin User'],
            ['id'=>2, 'name' => 'manager', 'description' => 'A Manager'],
            ['id'=>3, 'name' => 'cashier', 'description' => 'A Cashier'],
            ['id'=>4, 'name' => 'pharmacist', 'description' => 'A Pharmacist'],
        ]);
    }
}
