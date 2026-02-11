<?php
// database/migrations/2024_xx_xx_xxxxxx_add_role_to_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', [
                'owner',           // Full enterprise access
                'co_admin',        // Owner's wife - same as owner
                'resort_manager',  // Shyren Bugak Resort
                'hotel_manager',   // LSV Hotel
                'agri_manager'     // LSV Agri Supply
            ])->default('resort_manager')->after('email');
            
            $table->string('department')->nullable()->after('role');
            $table->json('permissions')->nullable()->after('department');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'department', 'permissions']);
        });
    }
};