<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'department_code')) {
                $table->string('department_code', 16)->nullable()->after('avatar_url');
            }
            if (!Schema::hasColumn('users', 'course_code')) {
                $table->string('course_code', 16)->nullable()->after('department_code');
            }
            if (!Schema::hasColumn('users', 'status')) {
                $table->string('status', 16)->default('Active')->after('course_code');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'status')) $table->dropColumn('status');
            if (Schema::hasColumn('users', 'course_code')) $table->dropColumn('course_code');
            if (Schema::hasColumn('users', 'department_code')) $table->dropColumn('department_code');
        });
    }
};


