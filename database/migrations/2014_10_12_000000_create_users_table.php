<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name')->nullable();
            $table->string('email');
            $table->enum("school", ["etna", "f2i", "ipssi"]);
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->dateTime("birthDay")->nullable();
            $table->enum("role", [1,2,3,4,5]);
            $table->enum("gender", ["m","f"])->nullable();
            $table->string("phone")->nullable();
            $table->text("adress")->nullable();
            $table->string("company")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->rememberToken();

            $table->softDeletes();

            $table->timestamps();

            $table->index(["id", "email", "password"]);
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
