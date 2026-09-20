<?php

namespace App\Models;

use App\Mail\CareerMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Career extends Model
{
    use HasFactory;

    protected $uploads = '/careerimg/';

    protected $guarded = [];

    public function getFileAttribute($photo)
    {

        return $this->uploads . $photo;

    }

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {
            try {
                $adminEmail = "sspreschool77@gmail.com";
                Mail::to($adminEmail)->send(new CareerMail($item));
            } catch (\Throwable $e) {
                \Illuminate\Support\Facades\Log::error('Career notification mail failed: ' . $e->getMessage());
            }
        });
    }
}
