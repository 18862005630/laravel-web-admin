<?php

use Illuminate\Database\Seeder;

class Photo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->table('admin_photos')->truncate();
        DB::connection('mysql')->table('admin_photos')->insert([
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CH' , 'url' => 'assets/images/gallery/our-gallery-1.jpg' , 'tag' => 'massage beauty'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CH' , 'url' => 'assets/images/gallery/our-gallery-2.jpg' , 'tag' => 'massage beauty'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CH' , 'url' => 'assets/images/gallery/our-gallery-3.jpg' , 'tag' => 'massage'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'SJ' , 'url' => 'assets/images/gallery/our-gallery-4.jpg' , 'tag' => 'skin-care'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'SJ' , 'url' => 'assets/images/gallery/our-gallery-5.jpg' , 'tag' => 'skin-care beauty'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'SJ' , 'url' => 'assets/images/gallery/our-gallery-6.jpg' , 'tag' => 'skin-care'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CDD' , 'url' => 'assets/images/gallery/our-gallery-7.jpg' , 'tag' => 'make-hair'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CDD' , 'url' => 'assets/images/gallery/our-gallery-8.jpg' , 'tag' => 'make-hair'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CDD' , 'url' => 'assets/images/gallery/our-gallery-9.jpg' , 'tag' => 'make-hair'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'THX' , 'url' => 'assets/images/gallery/our-gallery-10.jpg' , 'tag' => 'spa'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'THX' , 'url' => 'assets/images/gallery/our-gallery-11.jpg' , 'tag' => 'spa'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'THX' , 'url' => 'assets/images/gallery/our-gallery-12.jpg' , 'tag' => 'spa'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CYQ' , 'url' => 'assets/images/gallery/our-gallery-13.jpg' , 'tag' => 'nail'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CYQ' , 'url' => 'assets/images/gallery/our-gallery-14.jpg' , 'tag' => 'nail'],
           ['created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'),'title' => 'CYQ' , 'url' => 'assets/images/gallery/our-gallery-15.jpg' , 'tag' => 'nail'],
        ]);
    }
}
