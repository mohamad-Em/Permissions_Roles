<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromArray;

class UserExport implements FromArray
{
    public function array():array
    {
        $list = [];
        $users = User::all();
        foreach($users as $user)
        {
            $list [] = [$user->name , $user->email , $user->password ,$user->Status];
        }
        return $list;
    }
}
