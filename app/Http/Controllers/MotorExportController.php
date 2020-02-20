<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\MotorExport;
use App\Exports\CommercialExport;
use App\Exports\LastExport;
use App\Exports\LivestockExport;
use App\Exports\MedicExport;
use App\Exports\DomesticExport;
use App\Exports\ProfessionalExport;
use App\Exports\SchoolExport;
use App\Exports\WibaExport;


use Maatwebsite\Excel\Facades\Excel;

class MotorExportController extends Controller
{
    public function export() 
    {
        return Excel::download(new MotorExport, 'motors.xlsx');
    }
    public function commercial() 
    {
        return Excel::download(new CommercialExport, 'commercial.xlsx');
    }
    public function domestic() 
    {
        return Excel::download(new DomesticExport, 'domestic.xlsx');
    }
    public function last() 
    {
        return Excel::download(new LastExport, 'last.xlsx');
    }
    public function livestock() 
    {
        return Excel::download(new LivestockExport, 'livestock.xlsx');
    }
    public function medic() 
    {
        return Excel::download(new MedicExport, 'medic.xlsx');
    }
    public function professional() 
    {
        return Excel::download(new ProfessionalExport, 'professional.xlsx');
    }
    public function school() 
    {
        return Excel::download(new schoolExport, 'school.xlsx');
    }
    public function wiba() 
    {
        return Excel::download(new WibaExport, 'wiba.xlsx');
    }
}
