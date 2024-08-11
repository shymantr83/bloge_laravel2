<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_media extends Model
{use HasFactory;
 protected $guarded = [];
    public function media()
    {return $this->belongsTo(post::class);
    }
}
