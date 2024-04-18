<?php

namespace App\Http\Requests\User;

use App\Data\SellCertificateData;
use Illuminate\Foundation\Http\FormRequest;

class SellCertificateStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'cni' => 'required|numeric|digits:11|unique:certificates,cni',
            'delivery_date' => 'required|date',
            'delivery_place' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'domicile' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'amount' => 'required|numeric|min:0',
            'subject' => 'required|string|max:255',
            'legislation' => 'required|string|max:255',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function toDto(): SellCertificateData
    {
        //add the parameter identifier in function
        return new SellCertificateData(
            name: $this->validated("name"),
            cni: $this->validated("cni"),
            delivery_date: $this->validated("delivery_date"),
            delivery_place: $this->validated("delivery_place"),
            profession: $this->validated("profession"),
            domicile: $this->validated("domicile"),
            address: $this->validated("address"),
            phone_number: $this->validated("phone_number"),
            amount: $this->validated("amount"),
            subject: $this->validated("subject"),
            legislation: $this->validated("legislatio")
        );
    }
}
