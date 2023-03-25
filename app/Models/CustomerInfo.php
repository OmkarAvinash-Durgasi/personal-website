<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\CustomerInfo as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class CustomerInfo extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table='customers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customerNumber',
        'customerName',
        'contactLastName',
        'contactFirstName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postalCode',
        'country',
    ];
}
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
//    protected $hidden = [
//        'password',
//        'remember_token',
//    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
//
//}

