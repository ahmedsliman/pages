<?php

namespace AhmedSliman\Pages\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages::pages');
    }
}
