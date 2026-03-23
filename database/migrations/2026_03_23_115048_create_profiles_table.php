<?php

use App\Models\Profile;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: Profile::TABLE, callback:  function (Blueprint $table) {
            $table->id();
            $table->string(column: "name");
            $table->string(column: "title");
            $table->string(column: "city");
            $table->string(column: "about_me");
            $table->string(column: "profile_img");
            $table->string(column: "cv_pdf");
            $table->string(column: "github_link");
            $table->string(column: "gmail");
            $table->string(column: "linkedin_link");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists(table: Profile::TABLE);
    }
};
