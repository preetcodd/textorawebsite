<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pricing_masters', function (Blueprint $table) {
            $table->decimal('setup_cost', 10, 2)->default(0);
            $table->string('billing_type')->nullable();
            $table->decimal('marketing_price', 10, 4)->default(0);
            $table->decimal('utility_price', 10, 4)->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('pricing_masters', function (Blueprint $table) {
            $table->dropColumn(['setup_cost', 'billing_type', 'marketing_price', 'utility_price']);
        });
    }
};
