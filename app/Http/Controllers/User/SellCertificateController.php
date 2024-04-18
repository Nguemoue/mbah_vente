<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\SellCertificateStoreRequest;
use App\Models\Certificate;
use App\Services\SellCertificateService;

class SellCertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('certificate.certificate_list',[
            'certificates'=>$certificates
        ]);
    }

    public function create()
    {
        return view('certificate.certificate_create');
    }
    public function show(Certificate $certificate)
    {
        return view('certificate.certificate_detail',[
            'certificate'=>$certificate
        ]);
    }
    public function store(SellCertificateStoreRequest $request,SellCertificateService $service)
    {

        $service->store($request->toDto());
        return redirect()->route('certificate.create')->with('success','Certificate created successfully');
    }


}
