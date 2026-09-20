<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brocher extends Model
{
    use HasFactory;

    protected $uploads = '/brocherpdf/';

    protected $guarded = [];

    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }
}
