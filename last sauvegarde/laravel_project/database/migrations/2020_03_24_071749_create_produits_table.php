<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            //$table->string('slug')->unique();
            $table->string('realisation');
            $table->text('description');
            $table->string('subtitle');
            $table->bigInteger('category_id')->unsigned;
            $table->bigInteger('price')->unsigned;
            $table->string('image');
            $table->year('year'); 
            $table->timestamps();
        });
        Schema::table('produits', function (Blueprint $table) {
            $table->dropUnique('produits_title_unique'); // Drops index 'geo_state_index'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
