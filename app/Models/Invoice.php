<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Address;

class Invoice extends Model
{

    public $table = 'invoices';

    protected $fillable=[
        'description','value','address_id','user_id'
    ];

    protected $hidden =[
        'id',
        'user_id','address_id'
    ];

    public function address(){
        return $this ->hasOne(Address::class,'id','address_id');
    }

    public function user(){
        return $this ->hasOne(User::class,'id','address_id');
    }

    use HasFactory;


}
