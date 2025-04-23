<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message', ['current_page' => 'home']);
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function team()
    {
        return view('team');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blogDetail()
    {
        return view('blogdetail');
    }
    public function blogDetail2()
    {
        return view('blogdetail2');
    }
    public function blogDetail3()
    {
        return view('blogdetail3');
    }


}
