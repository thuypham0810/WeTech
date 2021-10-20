<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhanLoaiSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhanLoaiSanPham', function (Blueprint $table) {
            $table->string('IdLoaiSanPham',10)->primary()->unique();
            $table->string('LoaiThietBi_IdLoaiThietBi',10)->nullable();
            $table->string('NhaSanXuat_IdNhaSanXuat',10)->nullable();
            $table->string('TenLoaiSanPham',100)->nullable();
            $table->text('Note')->nullable();
            $table->timestamps();

            $table->foreign('LoaiThietBi_IdLoaiThietBi')
            ->references('IdLoaiThietBi')
            ->on('LoaiThietBi')
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
        Schema::dropIfExists('PhanLoaiSanPham');
    }
}
