<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmNhaCungCapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhaCungCap', function (Blueprint $table) {
            $table->string('IdNhaCungCap',10)->primary()->unique();
            $table->string('TenNhaCungCap',100)->nullable();
            $table->string('SanPham_IdSanPham',10)->nullable();
            $table->string('AddressNhaCungCap')->nullable();
            $table->string('PhoneNhaCungCap',11)->nullable();
            $table->text('Note')->nullable();
            $table->timestamps();

            $table->foreign('SanPham_IdSanPham')
            ->references('IdSanPham')
            ->on('SanPham')
            ->onDelete('SET NULL')
            ->onUpdate('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NhaCungCap');
    }
}
