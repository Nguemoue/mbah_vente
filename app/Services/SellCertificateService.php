<?php

namespace App\Services;

use App\Data\SellCertificateData;
use App\Models\Certificate;

class SellCertificateService
{

    public function store(SellCertificateData $data)
    {
         return Certificate::create($data->toArray());

    }
}
