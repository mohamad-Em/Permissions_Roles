<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class UserTwo implements FromArray
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function array(): array
    {
        $list2[] = ['name_ar', 'category_id'];

        return $list2;
    }
}
