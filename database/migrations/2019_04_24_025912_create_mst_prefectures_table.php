<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstPrefecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_prefectures', function (Blueprint $table) {
            $table->char('prefecture_cd',2);
            $table->primary('prefecture_cd');
            $table->string('prefecture_name',20);
            $table->char('insert_cd',5)->default('00001');
            $table->datetime('insert_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_prefectures');
    }
}
