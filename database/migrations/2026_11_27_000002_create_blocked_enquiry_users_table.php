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
        if (!Schema::hasTable('blocked_enquiry_users')) {
            Schema::create('blocked_enquiry_users', function (Blueprint $table) {
                $table->id();
                $table->string('email')->nullable()->index();
                $table->string('contact', 30)->nullable()->index();
                $table->string('ip_address', 45)->nullable()->index();
                $table->string('reason', 500)->nullable();
                $table->unsignedBigInteger('blocked_by')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocked_enquiry_users');
    }
};
