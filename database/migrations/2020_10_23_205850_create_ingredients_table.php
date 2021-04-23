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
            $table->text('name');
            $table->text('unit');
            $table->integer('unit_price');
            $table->integer('unit_quantity');
            $table->text('image')->nullable();
            $table->integer('remaining_quantity')->default(0);
            $table->integer('remaining_quantity_alert')->default(1);
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
