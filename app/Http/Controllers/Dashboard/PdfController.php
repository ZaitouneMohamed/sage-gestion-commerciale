<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function Facture(Order $order)
    {
        // dd($order);
        $pdf = PDF::loadView('pdf.facture', compact('order'));
        return $pdf->stream('facture.pdf');
    }
}
