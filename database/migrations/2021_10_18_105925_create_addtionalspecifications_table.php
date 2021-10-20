<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddtionalspecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addtionalspecifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productId');
            $table->string("diameter");
            $table->string("maxInflation");
            $table->string("maxLoadDual");
            $table->string("revsPerMile");
            $table->string("treadDepth");
            $table->string("weight");
            $table->string("plyRating");
            $table->string("rimWidth");
            $table->string("sectionWidth");
            $table->string("treadWidth");
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
        Schema::dropIfExists('addtionalspecifications');
    }
}
