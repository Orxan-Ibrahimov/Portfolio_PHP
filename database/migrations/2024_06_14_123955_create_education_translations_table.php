<?php

use App\Models\Education;
use App\Models\Language;
use App\Models\User;
use App\Models\UserTranslation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('education_translations', function (Blueprint $table) {
            $table->id();
            $table->string('translated_university');
            $table->string('translated_profession');
            $table->string('translated_degree');
            $table->longText('translated_description');
            $table->bigInteger('education_id')
            ->foreignIdFor(Education::class)->constrained()->cascadeOnDelete();
            $table->bigInteger('language_id')
            ->foreignIdFor(Language::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_translations');
    }
};
