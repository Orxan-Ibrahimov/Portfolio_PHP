<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }
   
}
