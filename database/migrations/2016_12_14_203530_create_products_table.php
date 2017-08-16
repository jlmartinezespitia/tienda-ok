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
            $table->increments('id');
            $table->string('clave',20);
            $table->string('nombre',255);
            $table->string('slug',255)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('extract',300)->nullable();
            $table->string('imagen',300)->nullable();
            $table->boolean('visible')->nullable();
            $table->string('colores',50)->nullable();
            $table->string('medidas',50)->nullable();
            $table->string('material',50)->nullable();
            $table->string('carac3',50)->nullable();
            $table->string('carac4',50)->nullable();
            $table->text('txtimpacto')->nullable();
            $table->string('status',30)->nullable();
            $table->string('paginacat',20)->nullable();
            $table->string('tecnicaimp',100)->nullable();
            $table->text('impcoment')->nullable();
            $table->string('empaque',50)->nullable();
            $table->string('pzasxcaja',20)->nullable();
            $table->string('medidacaja',30)->nullable();
            $table->string('peso100p',30)->nullable();
            $table->text('adicionales')->nullable();
            $table->boolean('nuevo')->nullable();
            $table->boolean('bestseller')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
            $table->integer('flag_id')->unsigned()->nullable();
            $table->foreign('flag_id')
                  ->references('id')
                  ->on('flags')
                  ->onDelete('cascade');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')
                  ->references('id')
                  ->on('brands')
                  ->onDelete('cascade');
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
