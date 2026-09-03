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
        // Clear table data before adding new fields to avoid conflicts with existing data
        DB::table('job_listings')->truncate();
        
        Schema::table('job_listings', function (Blueprint $table) {
            $table->integer('salary');
            $table->string('tags')->nullable();
            $table->enum('job_type', ['full-time', 'part-time', 'contract', 'internship'])->default('full-time');
            $table->boolean('is_remote')->default(false);
            $table->string('requirements')->nullable();
            $table->string('benefits')->nullable();
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('company_name');
            $table->string('company_description')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_website')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->dropColumn([
                'salary',
                'tags',
                'job_type',
                'is_remote',
                'requirements',
                'benefits',
                'address',
                'city',
                'state',
                'zipcode',
                'contact_email',
                'contact_phone',
                'company_name',
                'company_description',
                'company_logo',
                'company_website'
            ]);
        });
    }
};
