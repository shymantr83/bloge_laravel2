<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class page extends Model
{
    use HasFactory;
        use Sluggable;
        protected $table='posts';
    protected $guarded = [];
    public function sluggable(): array
    { return [
        'slug'=>['source'=>'titel']];
    }
    public function category()
    {return $this->belongsTo(category::class,'category_id','id');

    }
    public function user()
    {return $this->belongsTo(User::class,'user_id','id');
    }

    public function media()
    {return $this->hasMany(post_media::class ,'post_id','id');
    }

}
