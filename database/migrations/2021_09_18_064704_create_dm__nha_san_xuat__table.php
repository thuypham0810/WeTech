<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmNhaSanXuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhaSanXuat', function (Blueprint $table) {
            $table->string('IdNhaSanXuat',10)->primary()->unique();
            $table->string('TenNhaSanXuat',100)->nullable();
            $table->text('Note')->nullable();
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
        Schema::dropIfExists('NhaSanXuat');
    }
}
