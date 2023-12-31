<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=['user_id','order_status','payment_status','total_price'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function user_factory_medicine(){
        return $this->hasMany(userFactoryMedicine::class,'order_id');

    }
}
