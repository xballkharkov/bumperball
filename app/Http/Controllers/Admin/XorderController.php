<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Xorder;

class XorderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index(Request $request)
    {
        $xorders = Xorder::orderby('created', 'DESC')->get();

        return view('admin.xorder.index', [
            'xorders' => $xorders 
        ]);
    }
}