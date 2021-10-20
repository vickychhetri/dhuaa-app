<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductmoreinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productmoreinfos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productId');
            $table->string("typeofContent");
            $table->string("typeofContentValue");
    
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
        Schema::dropIfExists('productmoreinfos');
    }
}
