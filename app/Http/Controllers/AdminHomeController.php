<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
        //$adminCount = Admin::count();
        

        return view('stats',/* [
            'adminCount' => $adminCount,
        ]*/);
        
    }
    
}
