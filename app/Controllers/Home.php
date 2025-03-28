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
    public function portofolio()
    {
        return view('portofolio');
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
    public function blogDetail($slug)
    {
        // Simulasi data artikel berdasarkan slug (bisa diambil dari database)
        $data = [
            'title' => "Detail Blog: " . ucfirst(str_replace('-', ' ', $slug)),
            'content' => "Ini adalah isi dari artikel dengan slug: " . $slug
        ];

        return view('blog-detail', $data);
    }


}
