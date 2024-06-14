<?php

use App\Models\FooterPage;
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
        Schema::create('footer_page_translations', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->bigInteger('language_id')->foreignIdFor(Language::class)->constrained()->cascadeOnDelete();
            $table->bigInteger('footer_page_id')->foreignIdFor(FooterPage::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_page_translations');
    }
};
