<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->foreignId('rumah_sakit_id')
                  ->after('telepon')
                  ->constrained('rumah_sakit')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->dropForeign(['rumah_sakit_id']);
            $table->dropColumn('rumah_sakit_id');
        });
    }
};
