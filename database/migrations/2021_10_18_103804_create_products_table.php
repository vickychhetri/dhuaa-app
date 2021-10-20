<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // product category selection
            $table->bigInteger('productTypeId');
            $table->bigInteger('companyId');
            $table->bigInteger('categoryId');

            $table->string("productName");
            $table->string("productImage");
            $table->string("tireSize");
            $table->string("servDesc");
            $table->string("utqg");
            $table->string("sideWall");
            $table->string("maxLoad");
            $table->string("sku");
            $table->string("warantyMi");
            $table->string("speedRating");
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
        Schema::dropIfExists('products');
    }
}
