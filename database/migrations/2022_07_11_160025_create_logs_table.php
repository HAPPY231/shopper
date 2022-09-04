<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->enum('action', ['add product', 'add to cart','make order','add new addres','change order status - completed','change order status - in progress','change order status - began']);
            $table->foreignId('buyer_id')->constrained('users')->nullable();
            $table->foreignId('seller_id')->constrained('users')->nullable();
            $table->foreignId('order_id')->constrained('orders')->nullable();
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
        Schema::dropIfExists('logs');
    }
}
