<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $primaryKey = 'gallery_id';

    public function units()
    {
        return $this->hasMany(Units::class, 'gallery_id', 'gallery_id');
    }

    public function carousels()
    {
        return $this->hasMany(Carousel::class, 'carousel_img_id', 'gallery_id');
    }
}
