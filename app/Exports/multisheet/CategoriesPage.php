<?php

namespace App\Exports\multisheet;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;

class CategoriesPage implements FromArray
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function array(): array
    {
        $list[] = ['name_ar', 'business_id'];

        return $list;
    }
}
