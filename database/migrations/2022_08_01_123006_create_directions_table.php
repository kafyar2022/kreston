s<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('directions', function (Blueprint $table) {
      $table->id();
      $table->string('locale');
      $table->string('title');
      $table->string('slug')->unique();
      $table->string('img')->nullable();
      $table->text('content')->nullable();
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
    Schema::dropIfExists('directions');
  }
}
