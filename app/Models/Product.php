<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_code');
    }
}
