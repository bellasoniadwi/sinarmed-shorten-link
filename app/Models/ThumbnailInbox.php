<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThumbnailInbox extends Model
{
    use HasFactory;
    protected $table ='thumbnail_inbox';

    protected $fillable =[
        'nama',
        'telepon',
        'pesan'
    ];
}
