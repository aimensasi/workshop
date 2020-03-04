<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration{

	/**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('users', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('email')->unique();
      $table->string('password')->nullable();
      $table->datetime("email_verified_at")->nullable();
      $table->boolean('must_verify_email')->default(false);
      $table->json('profile')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('users');
  }
}
