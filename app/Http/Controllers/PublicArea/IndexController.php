<?php

namespace App\Http\Controllers\PublicArea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Public index
     *
     * @return void
     */
    public function index()
    {
        return view('PublicArea.Pages.Index.index');
    }
}
