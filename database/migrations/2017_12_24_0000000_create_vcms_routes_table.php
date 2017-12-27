<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcmsRoutesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vcms_routes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                
            $table->increments('id')->unique();
            $table->integer('sort_id')->unique();
            $table->string('type');
            $table->string('path');
            $table->string('middleware');
            $table->string('action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vcms_routes');
    }
}