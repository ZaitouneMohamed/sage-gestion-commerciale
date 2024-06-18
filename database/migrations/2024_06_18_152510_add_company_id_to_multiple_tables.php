<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $tables = [
        'users',
        'customers',
        'categories',
        'suppliers',
        'products',
        'orders',
    ];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('multiple_tables', function (Blueprint $table) {
            foreach ($this->tables as $table) {
                Schema::table($table, function (Blueprint $table) {
                    $table->unsignedBigInteger("company_id")->nullable();
                    $table->foreign("company_id")->references("id")->on("companies")->onDelete("cascade");
                });
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('multiple_tables', function (Blueprint $table) {
            foreach ($this->tables as $table) {
                Schema::table($table, function (Blueprint $table) {
                    $table->dropForeign(['company_id']);
                    $table->dropColumn('company_id');
                });
            };
        });
    }
};
