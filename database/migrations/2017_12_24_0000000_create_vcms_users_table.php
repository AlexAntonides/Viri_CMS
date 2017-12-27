<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcmsUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vcms_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('vcms_usersmeta', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('meta_key');
            $table->string('meta_value');
        });

        Schema::table('vcms_usersmeta', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('vcms_users');
        });

        DB::table('vcms_users')->insert(
            array(
                'name' => 'admin',
                'email' => 'admin',
                'password' => '$2y$10$zEIdnTAFZpqshmF9eK3U/etwPzMh3kQwgr19nxAJ0Sy7oQKqk6czq'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vcms_users');
        Schema::dropIfExists('vcms_usersmeta');
    }
}