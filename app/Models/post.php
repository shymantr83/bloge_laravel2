<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{ use HasFactory;
    use Sluggable;
    protected $guarded = [];
    public function sluggable(): array
    { return [
        'slug'=>['source'=>'titel']];
    }
    public function category()
    {return $this->belongsTo(category::class);

    }
    public function user()
    {return $this->belongsTo(User::class);
    }
    public function comments()
    {return $this->hasMany(comment::class);
    }
    public function aproved_comments()
    {return $this->hasMany(comment::class)->whereStatus(1);
    }
    public function media()
    {return $this->hasMany(post_media::class);
    }
}
