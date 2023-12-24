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
        Schema::table('products', function (Blueprint $table) {
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['hot_deal', 'featured_product', 'featured_product', 'special_offer', 'special_deal']);
        });
    }
};
