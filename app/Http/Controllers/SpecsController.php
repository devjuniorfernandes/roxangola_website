<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecsController extends Controller
{
    public function downloadPdf($modelo)
    {
        $modelName = $modelo === 'rox-01' ? 'ROX 01' : 'ROX ADAMAS';
        $filename = str_replace(' ', '_', $modelName) . '_Especificacoes_Angola.pdf';

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.especificacoes', [
            'modelo' => $modelo,
            'modelName' => $modelName,
        ]);

        $pdf->setPaper('a4', 'portrait');

        return $pdf->download($filename);
    }
}
