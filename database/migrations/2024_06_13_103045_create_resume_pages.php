<?php

use App\Models\Language;
use App\Models\ResumePage;
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
        Schema::create('resume_page_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('summary');
            $table->string('education');
            $table->string('professional_experience');
            $table->bigInteger('resume_page_id')
                ->foreignIdFor(ResumePage::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('resume_pages');
    }
};
