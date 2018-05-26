<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Stadium;

class StadiumController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index(Request $request)
    {       
        $list = Stadium::get();
        
        return view('admin.stadium.index', [
            'list' => $list 
        ]);
    }
}