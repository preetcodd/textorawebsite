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
        Schema::create('pricing_masters', function (Blueprint $table) {
            $table->id(); // cleaner than unsignedInteger + autoIncrement()

            $table->string('service');
            $table->string('subcategory');
            $table->string('category'); // STARTER PLAN / BUSINESS PLAN / ENTERPRISE PLAN

            // Monthly Pricing
            $table->decimal('monthly_price', 10, 2)->default(0);
            $table->unsignedInteger('monthly_total_messages')->default(0);

            // Yearly Pricing
            $table->decimal('yearly_price', 10, 2)->default(0);
            $table->unsignedInteger('yearly_total_messages')->default(0);

            // Titles
            $table->string('title');
            $table->text('sub_title')->nullable();

            // Features as JSON (nullable prevents constraint failures)
            $table->json('features')->nullable();

            // Active Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_masters');
    }
};
