<?php

use App\Models\WorkExperience;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: WorkExperience::TABLE, callback:  function (Blueprint $table) {
            $table->id();
            $table->string(column: "company_name");
            $table->string(column: "project_link")->nullable();
            $table->string(column: "job_desc");
            $table->date(column: "start_date");
            $table->date(column: "end_date")->nullable();
            $table->boolean(column: "is_current")->default(value: false);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists(table: WorkExperience::TABLE);
    }
};
