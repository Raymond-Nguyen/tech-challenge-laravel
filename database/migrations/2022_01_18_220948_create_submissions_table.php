<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('submissions', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string('first_name');
      $table->string('last_name');
      $table->string('title');
      $table->string('email');
      $table->string('message');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('submissions');
  }
}