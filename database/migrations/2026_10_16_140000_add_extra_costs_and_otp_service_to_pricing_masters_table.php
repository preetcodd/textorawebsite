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
        if (Schema::hasTable('pricing_masters')) {
            Schema::table('pricing_masters', function (Blueprint $table) {
                if (!Schema::hasColumn('pricing_masters', 'authentication_price')) {
                    $table->decimal('authentication_price', 10, 4)->nullable()->after('utility_price');
                }
                if (!Schema::hasColumn('pricing_masters', 'service_price')) {
                    $table->decimal('service_price', 10, 4)->nullable()->after('authentication_price');
                }
                if (!Schema::hasColumn('pricing_masters', 'extra_costs')) {
                    $table->json('extra_costs')->nullable()->after('service_price');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('pricing_masters')) {
            Schema::table('pricing_masters', function (Blueprint $table) {
                $columnsToDrop = [];
                if (Schema::hasColumn('pricing_masters', 'authentication_price')) {
                    $columnsToDrop[] = 'authentication_price';
                }
                if (Schema::hasColumn('pricing_masters', 'service_price')) {
                    $columnsToDrop[] = 'service_price';
                }
                if (Schema::hasColumn('pricing_masters', 'extra_costs')) {
                    $columnsToDrop[] = 'extra_costs';
                }
                if (!empty($columnsToDrop)) {
                    $table->dropColumn($columnsToDrop);
                }
            });
        }
    }
};
