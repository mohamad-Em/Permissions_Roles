<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'category_code');
    }
}
