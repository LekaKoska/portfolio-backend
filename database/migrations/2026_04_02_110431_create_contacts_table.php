<?php

use App\Models\Contact;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create(table: Contact::TABLE,  callback: function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'email');
            $table->text(column: 'message');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(table: Contact::TABLE);
    }
};
