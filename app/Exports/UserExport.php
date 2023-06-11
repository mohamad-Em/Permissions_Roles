<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class UserExport implements FromArray
{
    public function array(): array
    {
        $list[] = ['الأسم', 'الوصف', 'مجوعة الأب'];

        return $list;
    }
}
