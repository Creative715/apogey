<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Rucategory extends Model
{
         // Mass assigned
  protected $fillable = ['title', 'slug', 'description', 'intro', 'icon', 'rucategory_id'];
  // Mutators
  public function setSlugAttribute($value) {
    $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40));
  }
  // Get children category
  public function rucategories()
  {
      return $this->hasMany(Rucategory::class);
  }

  public function childrenRucategories()
  {
      return $this->hasMany(Rucategory::class)->with('rucategories');
  }
  
  // Polymorphic relation with ruposts

  public function ruposts()
   {
         return $this->belongsToMany('App\Rupost', 'rupost_rucategory');

   }
}
