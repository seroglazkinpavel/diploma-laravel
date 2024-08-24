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
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table ->unsignedBigInteger('user_id');
            $table ->unsignedBigInteger('post_id');
            $table ->text('message');
            $table->timestamps();

            $table->index('post_id', 'informations_post_idx');
            $table->index('user_id', 'informations_user_idx');

            $table->foreign('post_id', 'informations_post_fk')->on('posts')->references('id')->onDelete('cascade');
            $table->foreign('user_id', 'informations_user_fk')->on('users')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
