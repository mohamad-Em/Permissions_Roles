<?php

namespace App\Imports\multisheet;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsTable implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        return new Product([
            'name_ar' => $row['name_ar'],
            'category_code' => $row['category_code'],
            // 'user_id' => Auth::user()->id,
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}
