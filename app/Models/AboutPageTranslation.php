<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPageTranslation extends Model
{
    use HasFactory;

    public function about_page(){
        return $this->belongsTo(AboutPage::class, 'about_page_id');
    }

    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
}
