<?php

use App\Models\TechnicalSkills;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: TechnicalSkills::TABLE, callback:  function (Blueprint $table) {
            $table->id();
            $table->string(column: "name");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists(table: TechnicalSkills::TABLE);
    }
};
