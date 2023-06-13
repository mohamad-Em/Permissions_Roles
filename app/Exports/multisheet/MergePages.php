<?php

namespace App\Exports\multisheet;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MergePages implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function sheets(): array
    {
        $sheets = [];

        for ($page = 1; $page <= 2; $page++) {
            $sheets[0] = new CategoriesPage();
            $sheets[1] = new ProductsPage();
        }

        return $sheets;
    }
}
