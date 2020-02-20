<?php

namespace App\Exports;

use App\Wiba;
use Maatwebsite\Excel\Concerns\FromCollection;

class WibaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Wiba::all();
    }
}
