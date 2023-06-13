<?php

namespace App\Imports\multisheet;

use App\Models\Category;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CategoriesTable implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        return new Category([
            'name_ar' => $row['name_ar'],
            'code' => $row['code'],
            // 'business_id' => $row['business_id'],
            // 'user_id' => Auth::user()->id,
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}
