<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void { Schema::table('users', function (Blueprint $table) { if (!Schema::hasColumn('users','employee_no')) { $table->string('employee_no',32)->nullable()->unique()->after('role'); } if (!Schema::hasColumn('users','student_id')) { $table->string('student_id',32)->nullable()->unique()->after('employee_no'); } }); }
    public function down(): void { Schema::table('users', function (Blueprint $table) { if (Schema::hasColumn('users','student_id')) $table->dropColumn('student_id'); if (Schema::hasColumn('users','employee_no')) $table->dropColumn('employee_no'); }); }
};
