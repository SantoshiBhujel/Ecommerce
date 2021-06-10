<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->unsignedInteger('phone');
            $table->string('address');
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->integer('discount')->default(0);  
            $table->string('discount_code')->nullable();
            $table->integer('subtotal');
            $table->integer('total');
            $table->string('payment_gateway');
            $table->string('status')->default('In Process');
            $table->boolean('shipped')->default(0);
            $table->string('shipping_name')->nullable();
            $table->string('shipping_email')->nullable();
            $table->string('shipping_phone')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('shipping_state')->nullable();
            $table->string('shipping_city')->nullable();
            //$table->string('error')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
