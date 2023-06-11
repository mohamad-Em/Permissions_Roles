<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerVerification;
class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'name' , 'email' , 'password' , 'mobile'
    ];
    public function CustomerVerification()
    {
        return $this->hasMany(CustomerVerification::class,'customer_id');
    }
}
