<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function root()
    {
        $topic->replies()->with('user')->get();
        return view('pages.root');
    }
}
