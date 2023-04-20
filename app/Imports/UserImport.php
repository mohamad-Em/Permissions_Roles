<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithUpsertColumns;
use Maatwebsite\Excel\Concerns\WithUpserts;

class UserImport implements ToModel, WithUpsertColumns
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            "name" => $row[0],
            "email" => $row[1],
            "password" => Hash::make($row[2]),
            "role" => $row[3],
        ]);
    }
    public function upsertColumns()
    {
        return ['name', 'email' , 'password' , 'role'];
    }
}
