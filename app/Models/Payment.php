<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Payment extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='payments';

    protected $fillable = [
        'customerNumber',
        'checkNumber',
        'paymentDate',
        'amount',
    ];
}
