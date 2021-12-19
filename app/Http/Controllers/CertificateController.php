<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Certificate;
use App\Models\Certificate as ModelsCertificate;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_certificate = ModelsCertificate::get();
        return view('profile', compact('data_certificate'));
    }

}
