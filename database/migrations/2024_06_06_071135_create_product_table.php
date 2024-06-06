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
            $table->id();
            $table->string('item_name');
            $table->string('category');
            $table->decimal('quantity_on_hand');
            $table->decimal('reorder_level');
            $table->decimal('minimum_level');
            $table->decimal('maximum_level');
            $table->string('supplier_name');
            $table->string('contact');
            $table->float('unit_cost');
            $table->float('total_value');
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
};
