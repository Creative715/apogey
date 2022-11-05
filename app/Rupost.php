<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Rupost extends Model
{
         // Mass assigned
         protected $fillable = ['title', 'slug', 'intro', 'description', 'img', 'content'];

         // Mutators
         public function setSlugAttribute($value)
         {
           $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 100) . "-" );
         }
     
         // Polymorphic relation with categories
     
         public function rucategories()
         {
               return $this->belongsToMany('App\Rucategory', 'rupost_rucategory');
     
         }
}
