<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function contact()
    {
        $data['meta_title'] = 'Contact';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        return view('contact', $data);
    }
}
