<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediagalleryimage extends Model
{
    use HasFactory;

    protected $uploads = '/mediagalleryimg/';

    protected $guarded = [];

    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }
}
