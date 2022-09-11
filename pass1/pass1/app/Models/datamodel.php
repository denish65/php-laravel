<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class datamodel extends Model
{
    use HasFactory,Notifiable,HasApiTokens;

    protected $fillable=[

        'name','email','phone','message'
    ];
    protected $table='data';



}
