<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('MaSP');
            $table->string('name');
            $table->decimal('price');
            $table->decimal('entry_price'); //giá nhập
            $table->decimal('promo_price')->nullable(); //giá km
            $table->integer('amount'); //quantity - số lượng
            $table->integer('id_cate');
            $table->integer('id_pro_type')->nullable();
            $table->string('slug');
            $table->string('thumbnail');
            $table->string('description');
            $table->integer('brand');
            $table->integer('stt')->default(1);
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
}
