<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingSchemasToModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('items')->nullable();
            $table->bigInteger('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users');
        });

        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("good_description");
            $table->string("good_name");
            $table->string("image_field");
            $table->integer("price");
            $table->boolean("inverted_picture");
            $table->string('title');
            $table->BigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::create('billingInfos', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('owner_id')->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('country');
            $table->string('city');
            $table->string('street');
            $table->string('apartment');
            $table->string('delivery_method');
            $table->string('delivery_company');
            $table->string('postal_code');
            $table->string('cc_type');
            $table->string('cc_code');
            $table->string('cc_number');
            $table->string('cc_holder');
            $table->foreign('owner_id')->references('id')->on('users');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('order_date');
            $table->BigInteger('owner_id')->unsigned();
            $table->BigInteger('good_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('good_id')->references('id')->on('goods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('goods');
        Schema::dropIfExists('billingInfos');
        Schema::dropIfExists('orders');

    }
}
