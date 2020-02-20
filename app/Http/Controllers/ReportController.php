<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ReportController extends Controller
{

public function index()
{
  $this->authorize('browse_reports');
}

}
