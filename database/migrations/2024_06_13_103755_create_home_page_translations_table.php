<?php

use App\Models\HomePage;
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
        Schema::create('home_page_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('about_me');
            $table->bigInteger('home_page_id')
            ->foreignIdFor(HomePage::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('home_page_translations');
    }
};
