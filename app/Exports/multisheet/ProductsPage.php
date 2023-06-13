<?php

namespace App\Exports\multisheet;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsPage implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        $list2[] = ['name_ar', 'category_id '];

        return $list2;
    }
}
