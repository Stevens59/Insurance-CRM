<?php

namespace App\Exports;

use App\Domestic;
use Maatwebsite\Excel\Concerns\FromCollection;

class DomesticExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Domestic::all();
    }
}
