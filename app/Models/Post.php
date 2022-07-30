<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $dates = ['published_at'];

    protected $appends = ['published_date'];

    public function getRouteKeyName() {
      return 'slug';
    }

    public function getPublishedDateAttribute() {
      return optional($this->published_at)->format('M d');
    }

    public function category() {
      return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function tag() {
      return $this->belongsTo('App\Models\Tag', 'tag_id');
    }
}
