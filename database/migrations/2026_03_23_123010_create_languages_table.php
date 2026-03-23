<?php

use App\Models\Languages;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: Languages::TABLE, callback: function (Blueprint $table) {
            $table->id();
            $table->string(column: "name");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists(table: Languages::TABLE);
    }
};
