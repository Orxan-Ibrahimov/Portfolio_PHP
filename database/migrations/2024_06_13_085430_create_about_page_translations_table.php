<?php

use App\Models\AboutPage;
use App\Models\Language;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     */
    public function up(): void
    {
        Schema::create('about_page_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('birthday');
            $table->string('website');
            $table->string('phone');
            $table->string('skills');
            $table->string('city');
            $table->string('age');
            $table->string('degree');
            $table->string('freelance');
            $table->string('email');
            $table->string('biography');
            $table->string('available');
            $table->string('not_available');          
            $table->bigInteger('about_page_id')
            ->foreignIdFor(AboutPage::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('about_page_translations');
    }
};
