<?php

use App\Models\WorkExperience;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(table: WorkExperience::TABLE, callback: function (Blueprint $table) {
            $table->string(column: "job_title")->after(column: "company_name");
        });
    }
    public function down(): void
    {
        Schema::table(table: WorkExperience::TABLE, callback:  function (Blueprint $table) {
            //
        });
    }
};
