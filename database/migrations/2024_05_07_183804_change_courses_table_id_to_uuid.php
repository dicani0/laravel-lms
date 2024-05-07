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
        Schema::table('courses', function (Blueprint $table) {
            $table->uuid('new_id');
            $table->dropPrimary();
            $table->dropColumn('id');
            $table->renameColumn('new_id', 'id');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('uuid', function (Blueprint $table) {
            $table->dropPrimary();
            $table->dropColumn('id');
            $table->bigIncrements('id')->first();
        });
    }
};
