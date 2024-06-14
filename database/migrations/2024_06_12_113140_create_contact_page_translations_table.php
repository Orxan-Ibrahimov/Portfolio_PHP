<?php

use App\Models\ContactPage;
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
        Schema::create('contact_page_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact_page_id')
            ->foreignIdFor(ContactPage::class)->constrained()->cascadeOnDelete();
        $table->bigInteger('language_id')
            ->foreignIdFor(Language::class)->constrained()->cascadeOnDelete();
        $table->string('placeholder_name');
        $table->string('placeholder_email');
        $table->string('placeholder_subject');
        $table->string('placeholder_message');
        $table->string('location');
        $table->string('email_address');
        $table->string('call');
        $table->string('btn_send');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_page_translations');
    }
};
