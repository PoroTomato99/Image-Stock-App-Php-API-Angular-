<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
    protected $fillable = [
        'photo_title',
        'unique_name',
        'likes',
        'view',
        'signature',
        'user_id'
    ];
}
