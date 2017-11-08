<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about () {
        $data = [];
        $data['first'] = 'Tilikum';
        $data['last'] = 'Jardine';

        return view('pages.about', $data);
    }
}
