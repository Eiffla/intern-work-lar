<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $fillable = [
        "title",
        "slug",
        "content",
        "image",
        "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sluggable(): array
    {
        return[
            'slug' => [
                'source' => 'title'
            ]
            ];
    }
}
