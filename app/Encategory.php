<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Encategory extends Model
{
     // Mass assigned
  protected $fillable = ['title', 'slug', 'description', 'intro', 'icon', 'encategory_id'];
  // Mutators
  public function setSlugAttribute($value) {
    $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40));
  }
  // Get children category
  public function encategories()
  {
      return $this->hasMany(Encategory::class);
  }

  public function childrenEncategories()
  {
      return $this->hasMany(Encategory::class)->with('encategories');
  }

  // Polymorphic relation with posts

  public function enposts()
   {
         return $this->belongsToMany('App\Enpost', 'enpost_encategory');

   }
}
