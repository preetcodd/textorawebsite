<?php

use App\Models\PricingMaster;
use App\Models\User;
use App\Models\VlogMasters;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Ensure default Admin user exists
        if (!User::where('email', 'support@textorasms.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'support@textorasms.com',
                'password' => Hash::make('Admin@456'),
                'role' => 'Admin',
                'is_active' => true,
            ]);
        }

        // 2. Ensure initial Pricing Plans exist
        if (PricingMaster::count() === 0) {
            $pricingJsonPath = database_path('data/pricing_data.json');
            if (file_exists($pricingJsonPath)) {
                $plans = json_decode(file_get_contents($pricingJsonPath), true);
                if (is_array($plans)) {
                    foreach ($plans as $plan) {
                        unset($plan['id']);
                        PricingMaster::create($plan);
                    }
                }
            }
        }

        // 3. Ensure initial Blog Posts exist
        if (VlogMasters::count() === 0) {
            $blogJsonPath = database_path('data/blog_data.json');
            if (file_exists($blogJsonPath)) {
                $blogs = json_decode(file_get_contents($blogJsonPath), true);
                if (is_array($blogs)) {
                    foreach ($blogs as $blog) {
                        unset($blog['id']);
                        VlogMasters::create($blog);
                    }
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Do not delete in down to prevent accidental production data loss
    }
};
