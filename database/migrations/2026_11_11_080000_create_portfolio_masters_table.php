<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolio_masters', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('client_name');
            $table->string('client_logo')->nullable();
            $table->string('badge');
            $table->string('category')->default('web'); // e.g. "crm web", "web cpaas healthcare"
            $table->string('title');
            $table->text('description');
            $table->string('impact_highlight');
            $table->string('impact_desc');
            $table->string('tech_stack');
            $table->string('project_url')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        // Seed the 9 existing production portfolio case studies
        $now = now();
        $initialPortfolios = [
            [
                'client_name' => 'Reliable Properties',
                'client_logo' => 'images/client-logo/reliable.png',
                'badge' => 'Real Estate CRM',
                'category' => 'crm web',
                'title' => 'Reliable Properties: Lead Pipeline Hub & WhatsApp Automation',
                'description' => 'Custom property CRM integrating automated 1-click WhatsApp brochure dispatch, agent Kanban boards, and multi-channel lead routing.',
                'impact_highlight' => '+340% Lead Response Speed',
                'impact_desc' => '45,000+ Automated WhatsApp property brochures sent',
                'tech_stack' => 'Laravel, WhatsApp Cloud API, MySQL',
                'project_url' => null,
                'sort_order' => 1,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_name' => 'Surabhi Medical Science',
                'client_logo' => 'images/client-logo/surabhi.png',
                'badge' => 'Healthcare CPaaS',
                'category' => 'web cpaas healthcare',
                'title' => 'Surabhi Medical Science: OPD Alerts & Patient Portal',
                'description' => 'High-reliability patient notification gateway dispatching lab report ready alerts, appointment reminders, and automated doctor schedule updates.',
                'impact_highlight' => '99.8% Delivery in < 2.1s',
                'impact_desc' => 'Zero appointment no-shows via automated WhatsApp reminders',
                'tech_stack' => 'High-Throughput SMS Gateway, Meta Cloud API, Vue.js',
                'project_url' => null,
                'sort_order' => 2,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_name' => 'Tax Safar',
                'client_logo' => 'images/client-logo/tax.png',
                'badge' => 'FinTech Web App',
                'category' => 'web cpaas',
                'title' => 'Tax Safar: Financial Compliance & Direct Filing Platform',
                'description' => 'Secure, scalable corporate tax filing and document automation portal with integrated SMS OTP verification and GST filing status alerts.',
                'impact_highlight' => '100K+ Secure OTPs / Month',
                'impact_desc' => '99.98% Verification uptime with multi-operator failover',
                'tech_stack' => 'Laravel 10, Multi-Operator SMPP, Tailwind CSS',
                'project_url' => null,
                'sort_order' => 3,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_name' => 'Sahyogi',
                'client_logo' => 'images/client-logo/sahyogi.png',
                'badge' => 'Enterprise HRMS',
                'category' => 'crm web',
                'title' => 'Sahyogi: Enterprise HRMS & Biometric Attendance Engine',
                'description' => 'Comprehensive employee management portal featuring cloud attendance syncing, payroll processing, leave workflows, and automated salary slip dispatch.',
                'impact_highlight' => '85% Less Payroll Processing Time',
                'impact_desc' => 'Automated WhatsApp pay-slip delivery to 1,200+ employees',
                'tech_stack' => 'Laravel, Alpine.js, PostgreSQL, WhatsApp API',
                'project_url' => null,
                'sort_order' => 4,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_name' => 'Arihant Enterprises',
                'client_logo' => 'images/client-logo/arihant.png',
                'badge' => 'B2B Supply Chain',
                'category' => 'crm web',
                'title' => 'Arihant: Wholesale Distribution & Inventory Engine',
                'description' => 'Real-time stock visibility and order booking software for multi-branch distribution network with instant WhatsApp dispatch confirmations.',
                'impact_highlight' => '+42% Faster Order Dispatch',
                'impact_desc' => 'Reduced catalog inquiry calls by 60% with self-serve catalog',
                'tech_stack' => 'PHP, MySQL, WhatsApp Interactive Buttons',
                'project_url' => null,
                'sort_order' => 5,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_name' => 'Rapid Drop',
                'client_logo' => 'images/client-logo/rapiddrop.png',
                'badge' => 'Logistics CPaaS',
                'category' => 'cpaas web',
                'title' => 'Rapid Drop: Real-Time Parcel Tracking & RCS Engine',
                'description' => 'End-to-end delivery tracking platform using branded Rich Communication Services (RCS) & WhatsApp interactive carousels for doorstep verification.',
                'impact_highlight' => '98.4% Customer Satisfaction',
                'impact_desc' => '120,000+ monthly tracking notifications delivered',
                'tech_stack' => 'RCS Business Messaging, Webhooks, Node.js Microservice',
                'project_url' => null,
                'sort_order' => 6,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_name' => 'Shreeji Trading',
                'client_logo' => 'images/client-logo/shreeji.png',
                'badge' => 'E-Commerce Web',
                'category' => 'web',
                'title' => 'Shreeji: Multi-Category Commerce & Bulk Order Portal',
                'description' => 'High-performance digital catalog and quotation builder enabling B2B buyers to request volume pricing and receive quotes on WhatsApp.',
                'impact_highlight' => '3.2x Increase in Inquiries',
                'impact_desc' => 'Sub-second page loads across 5,000+ active product SKUs',
                'tech_stack' => 'Tailwind CSS, Laravel, Redis Cache',
                'project_url' => null,
                'sort_order' => 7,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_name' => 'RAM Academy (AIMT)',
                'client_logo' => 'images/client-logo/aimt.png',
                'badge' => 'EdTech ERP',
                'category' => 'web crm',
                'title' => 'RAM Academy: Student Admission & Fee Alert Engine',
                'description' => 'Centralized student lifecycle system managing admission lead funnels, fee payment reminder loops, and automated attendance notifications to parents.',
                'impact_highlight' => '94% On-Time Fee Collections',
                'impact_desc' => '30,000+ Parent notifications dispatched every term',
                'tech_stack' => 'Laravel, SMS DLT Binds, MySQL, Razorpay',
                'project_url' => null,
                'sort_order' => 8,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'client_name' => 'BTM Vet Clinic',
                'client_logo' => 'images/client-logo/btm.png',
                'badge' => 'Clinic Management',
                'category' => 'web healthcare',
                'title' => 'BTM Vet: Pet Care Booking & Vaccination Schedule Bot',
                'description' => 'Digital appointment booking portal integrated with conversational WhatsApp bot for booster shot alerts and prescription downloads.',
                'impact_highlight' => '5x Repeat Appointments',
                'impact_desc' => '24/7 automated booking without front-desk intervention',
                'tech_stack' => 'Laravel, WhatsApp Cloud API, Bootstrap, MySQL',
                'project_url' => null,
                'sort_order' => 9,
                'is_published' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('portfolio_masters')->insert($initialPortfolios);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_masters');
    }
};
