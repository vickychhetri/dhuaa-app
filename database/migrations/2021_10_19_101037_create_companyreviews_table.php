<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyreviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('companyId');
            $table->string("customerName");
            $table->string("reviewText");
            $table->string("rating");
            $table->string("email");
            $table->string("mobile");
            $table->string("ipAddress");
            
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
        Schema::dropIfExists('companyreviews');
    }
}
