<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderPage extends Model
{
    use HasFactory;

    public function translations(){
        return $this->hasMany(HeaderPageTranslation::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (HeaderPage::count() >= 1) {
                throw new \Exception('Only one row is allowed in this table.');
            }
        });
    }
}
