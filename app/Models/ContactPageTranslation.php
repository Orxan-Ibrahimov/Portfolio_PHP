<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPageTranslation extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function contact_page(){
        return $this->belongsTo(ContactPage::class, 'contact_page_id');
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }
}
