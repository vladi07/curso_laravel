<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('inicio');
    }
    
    public function show()
    {
        return view('admin.nosotros');
    }

    public function reporte()
    {
        return view('admin.reportes.reporte');
    }

}
