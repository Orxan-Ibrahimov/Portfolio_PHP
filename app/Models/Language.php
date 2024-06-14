<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    public function footer_page_translations(){
        return $this->hasMany(FooterPageTranslation::class);
    }

    public function contact_page_translations(){
        return $this->hasMany(ContactPageTranslation::class);
    }

    public function category_translations(){
        return $this->hasMany(CategoryTranslation::class);
    }

    public function about_page_translations(){
        return $this->hasMany(AboutPageTranslation::class);
    }

    public function header_page_translations(){
        return $this->hasMany(HeaderPageTranslation::class);
    }

    public function resume_page_translations(){
        return $this->hasMany(ResumePageTranslation::class);
    }

    public function home_page_translations(){
        return $this->hasMany(HomePageTranslation::class);
    }

    public function translated_educations(){
        return $this->hasMany(EducationTranslation::class);
    }

}
