<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('category'); // Love Knowledge, Relationship Behavior, Life Choices
            $table->json('options'); // Array of 4 options
            $table->integer('correct_answer'); // Index of correct answer (0-3)
            $table->integer('marks')->default(5);
            $table->timestamps();
            
            $table->index('category');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};