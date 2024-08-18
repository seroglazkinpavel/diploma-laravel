<?php

use App\Enums\Posts\Option;
use App\Enums\Posts\Radio;
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
        Schema::create('estimations', function (Blueprint $table) {
            $table->id();
            $table ->unsignedBigInteger('user_id');
            $table ->unsignedBigInteger('post_id');
            $table->enum('option', Option::getOptions());
            $table->index('option');
            $table->enum('radio', Radio::getRadio());
            $table->index('radio');
            $table ->text('message');
            $table->timestamps();

            $table->index('post_id', 'estimations_post_idx');
            $table->index('user_id', 'estimations_user_idx');

            $table->foreign('post_id', 'estimations_post_fk')->on('posts')->references('id');
            $table->foreign('user_id', 'estimations_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimations');
    }
};
