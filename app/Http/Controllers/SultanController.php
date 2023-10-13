<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class SultanController extends Controller
{
    public function rept()
    {

        $pdf=PDF::loadView('reported');
    return    $pdf->download('sultan.pdf');

    }
}
