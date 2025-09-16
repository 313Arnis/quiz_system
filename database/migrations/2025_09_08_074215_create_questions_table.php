<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up(): void
{
Schema::create('questions', function (Blueprint $table) {
$table->id();
$table->foreignId('quiz_id')->constrained('quizzes')->cascadeOnDelete();
$table->text('question');
$table->json('options');
$table->string('answer');
$table->enum('difficulty', ['easy','medium','hard']);
$table->string('topic');
$table->timestamps();
});
}

public function down(): void
{
Schema::dropIfExists('questions');
}
};