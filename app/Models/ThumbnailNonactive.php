<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThumbnailNonactive extends Model
{
    use HasFactory;
    protected $table ='thumbnail_nonactive';

    protected $fillable =[
        'judul_thumbnail',
        'link_thumbnail',
    ];
}
