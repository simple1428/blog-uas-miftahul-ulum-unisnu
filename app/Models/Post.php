<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    public function category()
    {
        return $this->belongsto(Category::class);
    }
    public function author()
    {
        return $this->belongsto(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}