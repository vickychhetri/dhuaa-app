<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userpages', function (Blueprint $table) {
            $table->id();
            $table->string('pageName');
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->string('content');
            $table->string('thumbnail');

            $table->integer('visible');
            
            $table->bigInteger('typePage');
            $table->bigInteger('parentId');
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
        Schema::dropIfExists('userpages');
    }
}
