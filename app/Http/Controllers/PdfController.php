<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function student(Student $student)
    {
        $pdf = PDF::loadView("pdf.student", compact("student"));
        return $pdf->stream();
    }
}
