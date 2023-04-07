<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Imprimir extends BaseController
{
    public function index()
    {
        //use Mpdf\Mpdf;
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Test de impresion, desde Codeigniter, usando la libreria MPDF</h1>');
        $mpdf->Output('mpdf.pdf', 'D');
    }

    public function printjs()
    {
        return view('Test/printjs');
     
    }
}
