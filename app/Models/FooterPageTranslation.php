<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterPageTranslation extends Model
{
    use HasFactory;

    public function footer_page(){
        return $this->belongsTo(FooterPage::class, 'footer_page_id');
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }
}
