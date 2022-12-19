<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_details', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('value');
            $table->string('sound_quality');
            $table->string('link');
            $table->string('harga');
            $table->text('exerpt');
            $table->text('review');
            $table->string('tipe_buds');
            $table->string('bluetooth_codec');
            $table->string('battery');
            $table->string('sound_tuning')->nullable();
            $table->string('img');
            $table->string('type');
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
        Schema::dropIfExists('products_details');
    }
}
