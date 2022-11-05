<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
  // Mass assigned
  protected $fillable = ['title', 'slug', 'description', 'intro', 'icon', 'category_id'];
  // Mutators
  public function setSlugAttribute($value) {
    $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40));
  }
  // Get children category
  public function categories()
  {
      return $this->hasMany(Category::class);
  }

  public function childrenCategories()
  {
      return $this->hasMany(Category::class)->with('categories');
  }
  
  // Polymorphic relation with posts

  public function posts()
   {
         return $this->belongsToMany('App\Post', 'post_category');

   }
}

