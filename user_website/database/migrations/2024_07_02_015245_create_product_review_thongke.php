<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('purchase_lists', function (Blueprint $table) {
            $table->id();
            $table->string('image', 255);
            $table->string('name', 255);
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->integer('total')->nullable();
            $table->integer('SDT')->nullable();
            $table->text('Address')->nullable();
            $table->text('Status')->default('Chờ xác nhận');
            $table->integer('id_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productlist1');
    }
};
