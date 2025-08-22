<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact - Online Store';
        $viewData['subtitle'] = 'Contact Information';
        $viewData['email'] = 'test@email.com';
        $viewData['address'] = 'Fifth Avenue';
        $viewData['phoneNumber'] = '123 456';

        return view('home.contact')->with('viewData', $viewData);
    }
}
