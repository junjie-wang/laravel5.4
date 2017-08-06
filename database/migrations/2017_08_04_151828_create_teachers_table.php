<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('');
            $table->integer('sex',4)->default(3);
            $table->string('email', 100)->default('');
            $table->string('mobile', 20)->default('');
            $table->string('subject', 50)->default('');
            $table->string('headImg', 50)->default('');
            $table->string('remark', 200)->default('');
            $table->string('password', 100);
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
        Schema::dropIfExists('teachers');
    }
}
