<?php

namespace App\Exports;

use App\Motor;
use Maatwebsite\Excel\Concerns\FromCollection;

class MotorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Motor::all();
    }
}
