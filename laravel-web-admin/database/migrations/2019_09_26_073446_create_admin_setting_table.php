<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_setting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("site_name")->nullable()->comment("站点名称");
            $table->string("site_url")->nullable()->comment("站点域名");
            $table->string("company_name")->nullable()->comment("公司名称");
            $table->string("company_addr")->nullable()->comment("公司地址");
            $table->string("mobile")->nullable()->comment("联系电话");
            $table->string("fax")->nullable()->comment("传真");
            $table->string("wx")->nullable()->comment("微信");
            $table->string("qq")->nullable()->comment("QQ");
            $table->string("zip_code")->nullable()->comment("邮编");
            $table->string("copyright")->nullable()->comment("版权归属");
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
        Schema::dropIfExists('admin_setting');
    }
}
