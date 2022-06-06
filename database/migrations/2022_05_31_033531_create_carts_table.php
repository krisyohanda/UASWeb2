<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2022_05_31_033531_create_carts_table.php
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('book_id');
            $table->integer('carts_id');
            $table->integer('jumlah');
            $table->integer('jumlah_harga');
=======
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->rememberToken();
>>>>>>> 53c7e6c3b00a11fd0f30aed8ad10c5e4ad708b99:database/migrations/2014_10_12_000000_create_users_table.php
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
        Schema::dropIfExists('carts');
    }
};