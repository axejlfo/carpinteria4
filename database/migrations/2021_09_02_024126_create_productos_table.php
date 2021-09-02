<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom_prod",45);
            $table->string("abreb_prod",10);
            $table->boolean("est_prod");
            $table->decimal("precio");
            $table->string("desc_prod",100);
            $table->unsignedBigInteger("categoria_id");
            $table->foreign("categoria_id")->references("id")->on("categorias");
            $table->unsignedBigInteger("proveedor_id");
            $table->foreign("proveedor_id")->references("id")->on("proveedors");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
