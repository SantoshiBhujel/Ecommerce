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
            $table->unsignedBigInteger('users_id');
            $table->string('name');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('menus_id');
            $table->unsignedBigInteger('submenus_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('description');
            $table->text('features');
            $table->integer('quantity');
            $table->string('buying_price');
            $table->string('selling_price');
            $table->tinyInteger('duration')->nullable();
            $table->string('duration_type')->nullable();
            $table->string('warranty_type')->nullable();
            $table->boolean('sale')->default(0);
            $table->string('sale_type')->nullable();
            $table->string('sale_value')->nullable();
            $table->boolean('free_shipping')->default(0);
            $table->boolean('featured')->default(0);
            $table->string('model_no')->nullable();
            $table->string('tags');
            $table->string('tax_included')->default(1);
            $table->string('tax')->default('0');
            $table->string('display_image');
            $table->integer('views')->default(0);
            $table->integer('sold')->default(0);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
