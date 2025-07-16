<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rumah_sakits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_rumah_sakit');
            $table->text('alamat_lengkap');
            $table->string('no_telpon');
            $table->string('type_rumah_sakit');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rumah_sakits');
    }
};