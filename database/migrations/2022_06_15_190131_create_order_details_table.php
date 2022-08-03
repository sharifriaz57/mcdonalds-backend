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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->string('order_no');
            $table->integer('menu_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quatity');
            $table->decimal('sub_total', 10, 2);
            $table->decimal('vat', 4, 2)->default('5.00');
            $table->decimal('total', 10, 2);
            $table->decimal('net_total', 10, 2);
            $table->tinyInteger('status')->default(1)->comment('1=active,0=inactive');
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
        Schema::dropIfExists('order_details');
    }
};
