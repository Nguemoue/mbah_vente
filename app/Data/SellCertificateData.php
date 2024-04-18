<?php

namespace App\Data;

use App\Http\Requests\User\SellCertificateStoreRequest;

class SellCertificateData
{
    public string $name;
    public int $cni;
    public string $delivery_date;
    public string $delivery_place;
    public string $profession;
    public string $domicile;
    public string $address;
    public string $phone_number;
    public float $amount;
    public string $subject;
    public ?string $legislation;

    public function __construct(string $name, int $cni, string $delivery_date, string $delivery_place, string $profession, string $domicile, string $address, string $phone_number, float $amount, string $subject, ?string $legislation)
    {
        $this->name = $name;
        $this->cni = $cni;
        $this->delivery_date = $delivery_date;
        $this->delivery_place = $delivery_place;
        $this->profession = $profession;
        $this->domicile = $domicile;
        $this->address = $address;
        $this->phone_number = $phone_number;
        $this->amount = $amount;
        $this->subject = $subject;
        $this->legislation = $legislation;
    }

    public function fromArray(array $data): SellCertificateData
    {
        return new self(
            $data['name'],
            $data['cni'],
            $data['delivery_date'],
            $data['delivery_place'],
            $data['profession'],
            $data['domicile'],
            $data['address'],
            $data['phone_number'],
            $data['amount'],
            $data['subject'],
            $data['legislation']
        );

    }

    public function fromRequest(SellCertificateStoreRequest $request): SellCertificateData
    {
        return new self(
            $request->name,
            $request->cni,
            $request->delivery_date,
            $request->delivery_place,
            $request->profession,
            $request->domicile,
            $request->address,
            $request->phone_number,
            $request->amount,
            $request->subject,
            $request->legislation
        );
    }

    public function toArray():array
    {
        return [
            'name' => $this->name,
            'cni' => $this->cni,
            'delivery_date' => $this->delivery_date,
            'delivery_place' => $this->delivery_place,
            'profession' => $this->profession,
            'domicile' => $this->domicile,
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'amount' => $this->amount,
            'subject' => $this->subject,
            'legislation' => $this->legislation
        ];

    }
}
