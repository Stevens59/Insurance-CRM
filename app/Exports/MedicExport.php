<?php

namespace App\Exports;

use App\Medic;
use Maatwebsite\Excel\Concerns\FromCollection;

class MedicExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Medic::all();
    }
}
