<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // one category has many foods
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); // category's id
            $table->string('name');  // category's name
            $table->longText('description');
            $table->timestamps();
        });

        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('count');
            $table->longText('description');
            $table->timestamps();
            // foreign keys
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    //->onDelete('cascade'); // record 1 bi xoa -> tham chieu sang record 1 se bi xoa theo
                    ->onDelete('set null'); // record 1 bi xoa -> tham chieu sang record 1 do khong bi xoa
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
        Schema::dropIfExists('categories');
    }
}
