<?php

use App\Models\Education;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: Education::TABLE , callback:  function (Blueprint $table) {
            $table->id();
            $table->string(column: "school_name");
            $table->string(column: "course");
            $table->string(column: "description");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists(table: Education::TABLE);
    }
};
