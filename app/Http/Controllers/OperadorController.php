<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class OperadorController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
}
