<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumePageTranslation extends Model
{
    use HasFactory;

    public function resume_page(){
        return $this->belongsTo(ResumePage::class, 'resume_page_id');
    }

    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
}
