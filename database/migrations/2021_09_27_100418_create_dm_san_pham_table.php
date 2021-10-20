<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->string('IdSanPham',10)->primary()->unique();
            $table->string('PhanLoaiSanPham_IdLoaiSanPham',10)->nullable();
            $table->string('TenSanPham', 100)->nullable();
            $table->string('NhaSanXuat_IdNhaSanXuat',10)->nullable();
            $table->string('GiaSanPham')->nullable();
            $table->string('HinhAnhSanPham')->nullable();
            $table->string('ThongSoKyThuat')->nullable();
            $table->string('ThongTinSanPham')->nullable();
            $table->timestamps();

            $table->foreign('NhaSanXuat_IdNhaSanXuat')
            ->references('IdNhaSanXuat')
            ->on('NhaSanXuat')
            ->onDelete('SET NULL')
            ->onUpdate('SET NULL');

            $table->foreign('PhanLoaiSanPham_IdLoaiSanPham')
            ->references('IdLoaiSanPham')
            ->on('PhanLoaiSanPham')
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
        Schema::dropIfExists('SanPham');
    }
}
