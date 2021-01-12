<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToProductsTable extends Migration
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
            $table->string('name', '100');
            $table->text('derscription');
            $table->string('image', '200');
            $table->string('size', '100');
            $table->string('color', '100');
            $table->string('type', '100');
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->string('currency', '100');
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
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('image');
            $table->dropColumn('size');
            $table->dropColumn('color');
            $table->dropColumn('type');
            $table->dropColumn('amount');
            $table->dropColumn('currency');
        });
    }
}