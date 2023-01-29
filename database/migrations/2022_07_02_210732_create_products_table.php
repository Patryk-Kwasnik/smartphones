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
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('name');
            $table->string('slug');
            $table->double ('size_screen', 3, 2);
            $table->integer('count');
            $table->string('color');
            $table->double('cpu_clock', 4, 2);
            $table->integer('count_cores');
            $table->integer('ram');
            $table->integer('camera_mpx');
            $table->integer('memory');
            $table->integer('battery_capacity');
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->text('desc')->nullable();
            $table->string('product_thumbnail');
            $table->integer('hot_deals')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('status')->default(0);
            $table->longText('data_serialized')->nullable();
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
