<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
                $table->increments('id_pegawai');
                $table->text('Nama');
                $table->enum('Jenis_Kelamin', ['Laki Laki', 'Perempuan']);
                $table->string('Umur');
                $table->string('No_Telp', 13);
                $table->string('Alamat');
                $table->string('Jabatan');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
