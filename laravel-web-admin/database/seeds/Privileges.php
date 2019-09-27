<?php

use Illuminate\Database\Seeder;

class Privileges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->table('admin_privileges')->truncate();
        DB::connection('mysql')->table('admin_privileges')->insert([
            //添加各个页面的相关权限(每个页面都最多有四种权限，QUERY查，ADD增，MODIFY改，DELETE删)，制定用户角色，分配不同的权限
            ['page_title' => 'Home' , 'privilege' => 'QUERY', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
            ['page_title' => 'Home' , 'privilege' => 'ADD', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
            ['page_title' => 'Home' , 'privilege' => 'MODIFY', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],
            ['page_title' => 'Home' , 'privilege' => 'DELETE', 'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')],

        ]);
    }
}
