<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Solicitude;

class PDFController extends Controller
{

    public function pdf_constancia($cod)
    {
        $solicitud = Solicitude::orderBy('id','ASC')->where('cod', '=',$cod)->first();
        $pdf = PDF::loadView('documentos.constancia',compact('solicitud'))
        ->setPaper('letter','portrait');
        return $pdf->stream();
    }

    public function pdf_vacaciones($cod)
    {
        $solicitud = Solicitude::orderBy('id','ASC')->where('cod', '=',$cod)->first();
        $pdf = PDF::loadView('documentos.vacaciones',compact('solicitud'))
        ->setPaper('letter','portrait');
        return $pdf->stream();
    }

    public function pdf_permiso($cod)
    {
        $solicitud = Solicitude::orderBy('id','ASC')->where('cod', '=',$cod)->first();
        $pdf = PDF::loadView('documentos.permisos',compact('solicitud'))
        ->setPaper('letter','portrait');
        return $pdf->stream();
    }

    // public function pdf_descargar_vacaciones($cod)
    // {
    //     $solicitud = Solicitude::orderBy('id','ASC')->get();
    //     $pdf = PDF::loadView('documentos.vacaciones',compact('solicitud'))
    //     ->setPaper('letter','portrait');
    //     return $pdf->download();
    // }
}
