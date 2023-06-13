<?php

namespace App\Imports\multisheet;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class Merge implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0  => new CategoriesTable(),
            1  => new ProductsTable(),
        ];
    }
}
