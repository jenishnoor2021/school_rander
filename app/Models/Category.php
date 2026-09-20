<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Achivement;
use App\Models\Activity;
use App\Models\Event;

class Category extends Model
{
  protected $guarded = [];

  public function setNameAttribute($value)
  {
    $this->attributes['name'] = $value;
    $this->attributes['slug'] = Str::slug($value);
  }

  public function achivements()
  {
    return $this->hasMany(Achivement::class);
  }

  public function activities()
  {
    return $this->hasMany(Activity::class);
  }

  public function events()
  {
    return $this->hasMany(Event::class);
  }
}
