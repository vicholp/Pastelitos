<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->text('name');
                $table->text('link')->nullable();
                $table->text('detail')->nullable();
                $table->text('quantity');
                $table->boolean('vegan')->default(true);
                $table->boolean('gluten')->default(true);
                $table->integer('estimated_time')->nullable();
                $table->text('class')->nullable();
                $table->text('image')->nullable();
                $table->float('factor')->default(1.0);
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
