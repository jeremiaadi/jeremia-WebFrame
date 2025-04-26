<?php

namespace App\Controllers;

use App\Models\BlogModel;


class Home extends BaseController
{
    protected $blogModel;
    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }
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
    
    public function contact()
    {
        return view('contact');
    }
    
    public function blog()
    {
        // $blog = $this->blogModel->findAll();

        $data = [
            'blog' => $this->blogModel->getBlog()
        ];

        return view('blog', $data);
    }

    public function detail($slug)

    {
        // $blog = $this->blogModel->findAll();

        $data = [
            'blog' => $this->blogModel->getBlog($slug),
            'recent_blog' => $this->blogModel->getBlog()
        ];

        return view('/blog-detail',$data);
    }


}
