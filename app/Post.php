<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    // Mass assigned
    protected $fillable = ['title', 'slug', 'intro', 'description', 'img', 'content'];

    // Mutators
    public function setSlugAttribute($value)
    {
      $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 100) . "-" );
    }

    // Polymorphic relation with categories

    public function categories()
    {
          return $this->belongsToMany('App\Category', 'post_category');

    }
}
