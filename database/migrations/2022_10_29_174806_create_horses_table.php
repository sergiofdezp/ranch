<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('nombre');
            $table->string('sexo');
            $table->string('raza');
            $table->string('edad');
            $table->foreignId('doma_id')->nullable()->constrained('domas')->onDelete('cascade');
            $table->foreignId('vacuna_id')->nullable()->constrained('vacunas')->onDelete('cascade');
            $table->foreignId('herraje_id')->nullable()->constrained('herrajes')->onDelete('cascade');
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('horses');
    }
}
