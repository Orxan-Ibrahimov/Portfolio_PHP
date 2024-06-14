<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function translations(){
        return $this->hasMany(ContactPageTranslation::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (ContactPage::count() >= 1) {
                throw new \Exception('Only one row is allowed in this table.');
            }
        });
    }
}
