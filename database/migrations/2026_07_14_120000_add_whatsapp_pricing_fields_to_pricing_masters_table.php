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
        Schema::table('pricing_masters', function (Blueprint $table) {
            $table->decimal('setup_cost', 10, 2)->nullable()->after('yearly_total_messages');
            $table->string('billing_type')->nullable()->after('setup_cost');
            $table->decimal('marketing_price', 10, 4)->nullable()->after('billing_type');
            $table->decimal('utility_price', 10, 4)->nullable()->after('marketing_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pricing_masters', function (Blueprint $table) {
            $table->dropColumn(['setup_cost', 'billing_type', 'marketing_price', 'utility_price']);
        });
    }
};
