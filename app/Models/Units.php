<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    protected $primaryKey = 'unit_id';

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id', 'gallery_id');
    }
}
