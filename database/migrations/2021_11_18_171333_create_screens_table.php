<?php

use App\Models\Brand;
use App\Models\Peripheral;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScreensTable extends Migration
{
  public function up()
  {
    Schema::create('screens', function (Blueprint $table) {
      $table->id();
      $table->string('serial')->unique();
      $table->string('size');

      $table->foreignIdFor(Peripheral::class)->constrained();      
      $table->foreignIdFor(Brand::class)->constrained();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('screens');
  }
}