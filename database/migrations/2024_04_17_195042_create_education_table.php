<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Education as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_APPLICANT_ID);
            $table->string(Model::FIELD_UNV_ID);
            $table->string(Model::FIELD_DATE_FROM);
            $table->string(Model::FIELD_DATE_TO);
            $table->string(Model::FIELD_DEGREE);
            $table->string(Model::FIELD_SPECIALTY);
            $table->string(Model::FIELD_ACCREDITATION_ASSESSMENT);
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
