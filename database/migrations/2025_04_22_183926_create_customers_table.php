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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cpf')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthday')->nullable();
            $table->unsignedInteger('years_old')->nullable();
            $table->foreignId('user_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
