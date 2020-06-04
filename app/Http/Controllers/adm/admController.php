<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admController extends Controller
{
    public function index() {
        return view('adm.index');
    }
}
