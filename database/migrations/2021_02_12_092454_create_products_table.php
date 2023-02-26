<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('product_id', 50)->primary();
            $table->string('product_name', 255);
            $table->string('product_image', 255);
            $table->integer('price');
        });

        DB::table('products')->insert(
            array(
                [
                    'product_id'=>'MTW_01',
                    'product_name'=>'Beef Samgyeopsal',
                    'product_image'=>'BeefSamgyeopsal.jpg',
                    'price'=>'230',
                    

                ],
                [
                    'product_id'=>'MTW_02',
                    'product_name'=>'Pork Samgyeopsal',
                    'product_image'=>'PorkSamgyeopsal.jpg',
                    'price'=>'280',
                ],
                [
                    'product_id'=>'MTW_03',
                    'product_name'=>'Potato Marble',
                    'product_image'=>'PotatoMarble.jpg',
                    'price'=>'120',
                ],
                [
                    'product_id'=>'MTW_04',
                    'product_name'=>'Hungarian Sausage',
                    'product_image'=>'HungarianSausage.jpg',
                    'price'=>'210',
                ],
                [
                    'product_id'=>'MTW_05',
                    'product_name'=>'Kimchi',
                    'product_image'=>'Kimchi.jpg',
                    'price'=>'250',
                ],
                [
                    'product_id'=>'MTW_06',
                    'product_name'=>'Lettuce',
                    'product_image'=>'Lettuce.jpg',
                    'price'=>'70',
                ],
              
              

             
            )
        );
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
