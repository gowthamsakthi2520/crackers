<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table ="orders";
    protected $fillable=['order_id','full_name','email','phone','address','city','state','pincode','total_amount','payment_status','payment_type','sub_total','discount','deliver_charge','offer','tax'];
}
