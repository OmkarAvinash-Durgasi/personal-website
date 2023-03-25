<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Office extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='offices';

    protected $fillable = [
        'officeCode',
        'city',
        'phone',
        'addressLine1',
        'addressLine2',
        'state',
        'postalCode',
        'country',
        'territory',
        ];
}
