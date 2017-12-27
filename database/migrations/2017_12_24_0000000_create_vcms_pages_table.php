<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcmsPagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vcms_pages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                
            $table->increments('id')->unique();
            $table->integer('sort_id')->unique();
            $table->string('name');
            $table->string('type');
            $table->string('path');
        });

        Schema::create('vcms_pagesmeta', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->string('meta_key');
            $table->string('meta_value');
        });

        Schema::table('vcms_pagesmeta', function (Blueprint $table) {
            $table->foreign('page_id')->references('id')->on('vcms_pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vcms_pages');
        Schema::dropIfExists('vcms_pagesmeta');
    }
}