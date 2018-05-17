<?php
/**
 * Created by PhpStorm.
 * User: bandit
 * Date: 28.06.17
 * Time: 21:56
 */

namespace App\Http\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Xorder;
use Config;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index(Request $request)
    {
        $user = \Auth::User();
        if ($user AND $user->id AND $user->isAdmin())
        {
            $xorders = DB::table('xorders')->orderby('created', 'DESC')->get();
            return view('xorder.list', [
                'xorders' => $xorders 
            ]);
        }
        
    }
}