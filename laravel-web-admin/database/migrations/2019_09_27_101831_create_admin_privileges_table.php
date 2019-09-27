<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_privileges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("page_title")->nullable()->comment("页面标题");
            $table->string("privilege")->nullable()->comment("四种权限(QUERY/ADD/MODIFY/DELETE)");
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
        Schema::dropIfExists('admin_privileges');
    }
}
