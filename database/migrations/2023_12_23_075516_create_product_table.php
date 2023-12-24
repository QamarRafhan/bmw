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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name', 250);
            $table->string('product_slug', 250);
            $table->text('product_short_description')->nullable();
            $table->text('product_long_description')->nullable();
            $table->double('product_price');
            $table->string('product_thumbnail', 250);
            $table->tinyInteger('product_status')->default(1);
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->foreignId('vendor_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
