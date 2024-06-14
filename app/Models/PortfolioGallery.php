<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class PortfolioGallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function portfolio(){
        return $this->belongsTo(Portfolio::class);
    }



}
