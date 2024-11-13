<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('employers', function (Blueprint $table) {
            $table->date('start_date')->nullable()->after('job_title'); // Add start_date column after job_title
            $table->string('state')->nullable()->after('start_date'); // Add state column after start_date
            $table->string('job_location')->nullable()->after('state'); // Add job_location column after state
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('employers', function (Blueprint $table) {
            $table->dropColumn(['job_title', 'start_date', 'state', 'job_location']);
        });
    }
};
