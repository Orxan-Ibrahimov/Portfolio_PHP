<?php

use App\Models\EducationTranslation;
use App\Models\Language;
use App\Models\User;
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
        Schema::create('user_translations', function (Blueprint $table) {
            $table->id();
            $table->string('translated_name');
            $table->string('translated_surname');
            $table->string('translated_nickname')->unique();
            $table->string('translated_city')->nullable();
            $table->string('translated_address')->nullable();
            $table->longText('translated_biography')->nullable();          
            $table->bigInteger('user_id')
                ->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('user_translations');
    }
};
