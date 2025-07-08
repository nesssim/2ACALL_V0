<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSalaryAndNegociableInJobOffersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('job_offers', function (Blueprint $table) {
            // Remove old salary_range column if it exists
            if (Schema::hasColumn('job_offers', 'salary_range')) {
                $table->dropColumn('salary_range');
            }

            // Add new numeric salary and negotiable boolean columns
            $table->float('salary')->nullable()->after('location');
            $table->boolean('is_salary_negotiable')->default(false)->after('salary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('job_offers', function (Blueprint $table) {
            // Remove the newly added columns
            $table->dropColumn('salary');
            $table->dropColumn('is_salary_negotiable');

            // Restore the old salary_range column as a string (nullable)
            $table->string('salary_range')->nullable()->after('location');
        });
    }
}