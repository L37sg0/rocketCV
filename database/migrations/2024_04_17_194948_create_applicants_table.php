<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Applicant as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_FIRST_NAME);
            $table->string(Model::FIELD_MID_NAME);
            $table->string(Model::FIELD_LAST_NAME);
            $table->string(Model::FIELD_EMAIL);
            $table->string(Model::FIELD_PHONE);
            $table->string(Model::FIELD_GENDER);
            $table->string(Model::FIELD_BIRTH_DATE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
};
