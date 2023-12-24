<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_product_data', function (Blueprint $table) {
            $table->integer('product_id')->nullable();
            $table->string('product_name', 250)->nullable();
            $table->string('product_slug', 250)->nullable();
            $table->string('product_code', 250)->nullable();
            $table->integer('product_quantity')->nullable();
            $table->string('product_tags', 250)->nullable();
            $table->double('product_price')->nullable();
            $table->text('product_short_description')->nullable();
            $table->text('product_long_description')->nullable();
            $table->string('product_thumbnail', 250)->nullable();
            $table->char('product_status', 1)->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->string('product_colors', 250)->nullable();
            $table->integer('offer_id')->nullable();
            $table->integer('offer_product_id')->nullable();
            $table->tinyInteger('hot_deal')->nullable();
            $table->tinyInteger('featured_product')->nullable();
            $table->tinyInteger('special_offer')->nullable();
            $table->tinyInteger('special_deal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_product_data');
    }
};
