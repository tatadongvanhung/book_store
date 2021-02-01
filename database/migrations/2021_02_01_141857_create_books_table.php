<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('isbn');
            $table->string('title');
            $table->string('author');
            $table->integer('publication_year')->nullable();
            $table->integer('publisher_id');
            $table->bigInteger('available_quantity');
            $table->bigInteger('price');
            $table->string('language')->nullable();
            $table->string('size')->nullable();
            $table->string('image')->nullable();
            $table->integer('category_id');
            $table->string('note',500)->nullable();
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
        Schema::dropIfExists('books');
    }
}
