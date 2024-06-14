<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderPageTranslation extends Model
{
    use HasFactory;

    public function header_page(){
        return $this->belongsTo(HeaderPage::class, 'header_page_id');
    }

    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
}
