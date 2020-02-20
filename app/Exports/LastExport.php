<?php

namespace App\Exports;

use App\Last;
use Maatwebsite\Excel\Concerns\FromCollection;

class LastExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Last::all();
    }
}
