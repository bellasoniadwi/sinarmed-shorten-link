<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThumbnailSocialmedia extends Model
{
    use HasFactory;
    protected $table ='thumbnail_socialmedia';

    protected $fillable =[
        'gambar_thumbnail',
        'link_thumbnail',
    ];
}
