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
        Schema::create('client_masters', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('company')->nullable();
            $table->string('contact')->nullable();
            $table->text('address')->nullable();
            $table->string('password')->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('business_email')->nullable();
            $table->string('business_contact')->nullable();
            $table->timestamps();
            $table->softDeletes(); // creates deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_masters');
    }
};
