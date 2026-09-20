<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleryimage extends Model
{
    use HasFactory;

    protected $uploads = '/galleryimg/';

    protected $guarded = [];

    public function getFileAttribute($photo){
        if (empty($photo)) {
            return null;
        }

        if (str_starts_with($photo, 'http://') || str_starts_with($photo, 'https://')) {
            return $photo;
        }

        if (str_starts_with($photo, '/') || str_starts_with($photo, 'assets/')) {
            return '/' . ltrim($photo, '/');
        }

        if (str_starts_with($photo, 'galleryimg/')) {
            return '/' . ltrim($photo, '/');
        }

        return $this->uploads . $photo;
    }
}
