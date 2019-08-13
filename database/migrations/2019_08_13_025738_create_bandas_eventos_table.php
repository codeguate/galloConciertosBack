<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandasEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandas_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable()->default(null);
            $table->double('valor')->nullable()->default(null);
            $table->timestamp('fecha')->useCurrent();
            $table->string('comentario')->nullable()->default(null);
            $table->string('descripcion')->nullable()->default(null);
            $table->string('youtube')->nullable()->default(null);
            $table->string('twitter')->nullable()->default(null);
            $table->string('web')->nullable()->default(null);
            $table->string('spotyfy')->nullable()->default(null);
            $table->integer('type')->nullable()->default(1);
            $table->integer('state')->nullable()->default(1);

            $table->integer('banda')->nullable()->default(null)->unsigned();
            $table->foreign('banda')->references('id')->on('bandas')->onDelete('cascade');

            $table->integer('evento')->nullable()->default(null)->unsigned();
            $table->foreign('evento')->references('id')->on('eventos')->onDelete('cascade');
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
        Schema::dropIfExists('bandas_eventos');
    }
}
