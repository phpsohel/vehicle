<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Report;

use PDF;

class PdfController extends Controller
{
    public function index(){
        $all_reports = Report::get();
          $pdf = PDF::loadView('admin.pdf.pdf',[
             'all_reports' => $all_reports
          ]);
          return $pdf->download('all_reports.pdf');
    }
}
