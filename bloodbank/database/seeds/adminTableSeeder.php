<?php

use Illuminate\Database\Seeder;
use App\Admin;

class adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_info = new Admin;
        $admin_info->username = "aiesecnitt";
        $admin_info->password = sha1('aiesec123');
        $admin_info->save();
    }
}
