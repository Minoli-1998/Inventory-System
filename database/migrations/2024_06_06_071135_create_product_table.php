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
            $table->string('item-name');
            $table->string('category');
            $table->decimal('quantity-on-hand');
            $table->decimal('reorder-level');
            $table->decimal('minimum-level');
            $table->decimal('maximum-level');
            $table->string('supplier-name');
            $table->string('contact');
            $table->float('unit-cost');
            $table->float('total-value');
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
