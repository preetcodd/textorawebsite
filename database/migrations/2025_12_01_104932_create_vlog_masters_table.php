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
        Schema::create('vlog_masters', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('image')->nullable();
            $table->date('date');
            $table->string('title');
            $table->text('description');
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vlog_masters');
    }
};
