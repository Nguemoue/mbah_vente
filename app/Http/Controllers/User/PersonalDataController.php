<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PersonalDataController extends Controller
{
    public function index()
    {
        return view('user.personal_data');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key=>$value){
            Config::set("certificate_pdf.$key",$value);
        }
        return back()->with('success',"Data updated");
    }
}
