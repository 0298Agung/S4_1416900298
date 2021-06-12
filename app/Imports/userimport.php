<?php

namespace App\Imports;

use App\user;
use Maatwebsite\Excel\Concerns\ToModel;

class userimport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new user([
            'name'     =>$row[0],
            'email'    =>$row[1],
            'password' => \has::make('123456'),
            //
        ]);
    }
}
