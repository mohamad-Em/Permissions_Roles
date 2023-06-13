<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UserMultiSheet implements WithMultipleSheets
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function sheets(): array
    {
        $sheets = [];

        for ($page = 1; $page <= 2; $page++) {
            $sheets[0] = new UserExport();
            $sheets[1] = new UserTwo();
        }

        return $sheets;
    }
}
