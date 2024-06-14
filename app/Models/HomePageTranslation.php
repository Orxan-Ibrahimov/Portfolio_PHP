<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageTranslation extends Model
{
    use HasFactory;

    public function home_page(){
        return $this->belongsTo(HomePage::class, 'home_page_id');
    }

    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
}
