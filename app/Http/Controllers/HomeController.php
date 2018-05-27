<?php
/**
 * Created by PhpStorm.
 * User: Pushok
 * Date: 05.09.2016
 * Time: 18:43
 */

namespace App\Http\Controllers;

use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index')->with([
            'meta' => Page::getPageByAlias('home')
        ]);
    }

    public function faq()
    {
        return view('home.faq')->with([
            'meta' => Page::getPageByAlias('faq')
        ]);
    }

    public function price()
    {
        return view('home.price');
    }

    public function contacts()
    {
        return view('home.contacts')->with([
            'meta' => Page::getPageByAlias('contact')
        ]);
    }
}