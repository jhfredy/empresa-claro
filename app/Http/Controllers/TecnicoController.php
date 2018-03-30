<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TecnicoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function tecnicos() {
        return User::tecnicos()->get();
    }
    
    
}
