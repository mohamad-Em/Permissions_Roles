<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class UserExport implements FromArray
{
    public function array(): array
    {
        $list[] = ['name_ar', 'description_ar'];

        return $list;
    }
}
