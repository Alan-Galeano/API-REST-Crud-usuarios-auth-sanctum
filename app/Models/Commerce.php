<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commerce extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'commerce_name',
        'commerce_address',
        'commerce_phone_number',
    ];
}
