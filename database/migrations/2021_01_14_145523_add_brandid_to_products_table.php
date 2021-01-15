<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBrandidToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->string('quantity', '100');
            $table->string('status', '100');
            $table->string('condition', '100');
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
            //
            $table->dropColumn('category_id');
            $table->dropColumn('sub_category_id');
            $table->dropColumn('brand_id');
            $table->dropColumn('quantity');
            $table->dropColumn('status');
            $table->dropColumn('condition');
        });
    }
}