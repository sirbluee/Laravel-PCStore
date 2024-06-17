<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\SubCategoryController;

class HomeController extends Controller
{
    public function home()
    {
        $data['meta_title'] = 'Home';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        return view('home', $data);
    }
}
