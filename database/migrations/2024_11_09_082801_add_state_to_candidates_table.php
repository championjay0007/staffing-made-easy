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
        Schema::table('candidates', function (Blueprint $table) {
            $table->string('state')->nullable()->after('address'); // Add state column after address
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('candidates', function (Blueprint $table) {
            $table->dropColumn('state');
        });
    }
};
