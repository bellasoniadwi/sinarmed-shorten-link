<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThumbnailGroup extends Model
{
    use HasFactory;
    protected $table ='thumbnail_group';

    protected $fillable =[
        'judul_thumbnail',
        'link_thumbnail',
        'gambar_thumbnail',
    ];
}
