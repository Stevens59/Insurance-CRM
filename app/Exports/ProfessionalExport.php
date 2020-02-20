<?php

namespace App\Exports;

use App\Professional;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProfessionalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Professional::all();
    }
}
