<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductfeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productfeatures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productId');
            $table->string("features");
            $table->string("benefits");
    
             //parentId for who created or store or enter data
             $table->string("parentId");
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
        Schema::dropIfExists('productfeatures');
    }
}
