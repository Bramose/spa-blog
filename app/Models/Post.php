<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['published_at'];

    protected $appends = ['published_date'];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function getPublishedDateAttribute()
    {
        return optional($this->published_at)->format('M d');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
