<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $primaryKey = 'carousel_id';

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'carousel_img_id', 'gallery_id');
    }
}
