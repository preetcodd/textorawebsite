<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('enquiry_masters') && !Schema::hasColumn('enquiry_masters', 'is_terms_accepted')) {
            Schema::table('enquiry_masters', function (Blueprint $table) {
                $table->boolean('is_terms_accepted')->default(false)->after('message');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enquiry_masters', function (Blueprint $table) {
            $table->dropColumn('is_terms_accepted');
        });
    }
};
