<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeripheralsTable extends Migration
{
  public function up()
  {
    Schema::create('peripherals', function (Blueprint $table) {
      $table->id();
      $table->string('inventory')->unique();
      $table->string('per_type');

      $table->foreignId('usersabs_id')->references('id')->on('users');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('peripherals');
  }
}