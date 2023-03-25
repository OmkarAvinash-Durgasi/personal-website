<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ProductLine extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='productlines';

    protected $fillable = [
        'productLine',
        'textDescription',
        'htmlDescription',
        'image',

    ];
}
