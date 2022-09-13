<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Report;

class PrintController extends Controller
{
       public function index()
        {
              $all_reports = Report::all();
              return view('admin.print.printstudent')->with('all_reports', $all_reports);;
        }
        public function prnpriview()
        {
              $all_reports = Report::all();
              return view('admin.print.students')->with('all_reports', $all_reports);;
        }
}
