<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\EnquiryMail;

class Enquirey extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
            try {
                $adminEmail = "sspreschool77@gmail.com";
                Mail::to($adminEmail)->send(new EnquiryMail($item));
            } catch (\Throwable $e) {
                \Illuminate\Support\Facades\Log::error('Enquiry notification mail failed: ' . $e->getMessage());
            }
        });
    }
    
}
