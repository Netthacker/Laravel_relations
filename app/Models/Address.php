<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Address extends Model
{
    public $table = 'addresses';

    protected $fillable=[
        'address',
    ];

    protected $hidden=[
        'id'
    ];

    use HasFactory;

}
