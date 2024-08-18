<?php

use App\Enums\Posts\Status;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->constrained('categories');

            $table->string('title', 255);
            $table->string('author', 100)->default('Admin');
            $table->string('image', 255)->nullable();
            $table->enum('status', Status::getEnums());
            $table->index('status');
            $table->text('description');
            $table->timestamps();


            //$table->boolean('published')->default(true)->comment('Опобликован или нет');
            //$table->timestamp('published_at')->nullable()->comment('Дата побликации поста');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
