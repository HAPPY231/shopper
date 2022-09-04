<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('item_id')->constrained('products')->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('amount');
            $table->decimal('value',9,2);

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
        Schema::dropIfExists('basket');
    }
}
