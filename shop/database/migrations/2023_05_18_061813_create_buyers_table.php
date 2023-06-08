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
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();

            $table->string('name')->default("-");
            $table->string('surname')->default("-");
            $table->string('phone')->default("-");
            $table->string('address')->default("-");
            $table->string('country')->default("-");

            $table->unsignedBigInteger('user_id');

            $table->index('user_id', 'buyer_user_idx');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
