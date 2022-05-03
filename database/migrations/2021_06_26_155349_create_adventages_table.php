<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdventagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventages', function (Blueprint $table) {
            $table->id();
            $table->string('text',115);
            $table->enum('type', ['filter', 'company']);
            $table->boolean('is_visible')->default(1);
            $table->string('img',100);
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
        Schema::dropIfExists('adventages');
    }
}
