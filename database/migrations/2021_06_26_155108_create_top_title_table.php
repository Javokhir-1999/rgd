<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_title', function (Blueprint $table) {
            $table->id();
            $table->string('bg_img',150)->nullable();
            $table->string('title',170);
            $table->string('desc',200)->nullable();
            $table->string('call_text',110)->nullable();
            $table->integer('call_number');
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
        Schema::dropIfExists('top_title');
    }
}
