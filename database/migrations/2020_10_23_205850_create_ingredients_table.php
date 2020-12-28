<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('unit');
            $table->integer('unit_price')->default(1000);
            $table->integer('unit_quantity')->default(1000)->nullable();
            $table->string('image')->nullable();
            $table->integer('remaining_quantity')->default(0);
            $table->set('type', ['intangible', 'consumable', 'package'])->default('consumable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
