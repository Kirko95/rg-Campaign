<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('fullname', 100);
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('passport')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->integer('age')->nullable();
            $table->string('town')->nullable();
            $table->boolean('is_admin')->default(False);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
