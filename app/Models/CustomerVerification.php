<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
class CustomerVerification extends Model
{
    use HasFactory;
    protected $table = 'customer_verification';
    protected $fillable = [
        'customer_id' , 'code'
    ];
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
