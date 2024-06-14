<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationTranslation extends Model
{
    use HasFactory;

    public function education(){
        return $this->belongsTo(Education::class, 'education_id');
    }
    public function language(){
        return $this->belongsTo(Language::class);
    }
}
