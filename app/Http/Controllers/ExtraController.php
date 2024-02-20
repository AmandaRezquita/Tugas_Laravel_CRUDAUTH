<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtraController extends Controller
{
    public static function index()
    {
        return view('extra', [
        "title" => "extra",
        "extracurricular" => Extracurricular::all()
    ]);
    }
}
