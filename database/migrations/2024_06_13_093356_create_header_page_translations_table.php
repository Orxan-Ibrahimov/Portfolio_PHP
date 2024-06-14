<?php

use App\Models\HeaderPage;
use App\Models\Language;
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
        Schema::create('header_page_translations', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('home');
            $table->string('about');
            $table->string('resume');
            // $table->string('services');
            $table->string('portfolio');
            $table->string('contact');
            $table->bigInteger('header_page_id')
                ->foreignIdFor(HeaderPage::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('header_page_translations');
    }
};
