<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThumbnailActive extends Model
{
    use HasFactory;
    protected $table ='thumbnail_active';

    protected $fillable =[
        'judul_thumbnail',
        'link_thumbnail',
        'gambar_thumbnail',
    ];
}
