<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class SellCertificateDownloadController extends Controller
{
    public function __invoke(Request $request,Certificate $certificate)
    {
        // generate a name with the customer name and the current date
        $docName = 'Certificate '.$certificate->name.' at '.$certificate->created_at->format('Y-m-d_H_i_s').'.pdf';
        $pdf = \PDF::loadView('certificate_pdf', ['certificate' => $certificate]);
        //return view('certificate_pdf', ['certificate' => $certificate]);
        return $pdf->inline($docName);
    }
}
