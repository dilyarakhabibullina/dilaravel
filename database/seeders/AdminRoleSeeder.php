<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('id',4)->update(['is_admin'=>1]);
        DB::table('users')->where('id',6)->update(['is_admin'=>1]);
        DB::table('users')->where('id',7)->update(['is_admin'=>1]);
    }
}
