<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title")->nullable()->comment("图片标题");
            $table->string("url")->nullable()->comment("图片路径");
            $table->string("tag")->nullable()->comment("图片标签");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_photos');
    }
}
