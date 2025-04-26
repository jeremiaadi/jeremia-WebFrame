<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blogModel;
    public function __construct()
    {
        $this->blogModel = new blogModel();
    }

    public function index()
    {
        // $blog = $this->blogModel->findAll();

        $data = [
            'blog' => $this->blogModel->getBlog()
        ];

        return view('/admin/dashboard', $data);
    }

    public function detail($slug)
    {
        // $blog = $this->blogModel->getBlog($slug);

        $data = [
            'blog' => $this->blogModel->getBlog($slug)

        ];

        return view('/admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'form Tambah Data Blog',
            'validation' => session('validation') ?? \Config\Services::validation()
        ];

        return view('/admin/create', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[blog.judul]',
                'errors' => [
                    'requaired' => '{field} judul harus di isi.',
                    'is_unique' => '{field} komik sudah terdaftar'
                ]
            ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => '{field} harus berupa gambar',
                    'mime_in' => '{field} harus berformat JPG, JPEG, atau PNG',


                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/create')->withInput()->with('validation',$validation);
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());

        }

        // Upload Gambar
        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            $namaGambar = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/assets/gambar/', $namaGambar);
        }



        $slug = url_title($this->request->getVar('judul'), '-', true);
        // Simpan ke Database
        $this->blogModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'deskripsi' =>$this->request->getVar('deskripsi'),
            'gambar' => $namaGambar,
            'created_at' => $this->request->getVar('created_at'),
            'updated_at' => $this->request->getVar('updated_at')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $this->blogModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin')->with('success', 'Data berhasil dihapus');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'form Ubah Data Blog',
            'validation' => session('validation') ?? \Config\Services::validation(),
            'blog' => $this->blogModel->asArray()->where('slug', $slug)->first()

        ];

        return view('/admin/edit', $data);
    }

    public function update($id)
    {
            
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->blogModel->save([
            'id' => $id,
            'judul' => $this-> request->getVar('judul'),
            'slug' => $slug,
            'gambar' => $this->request->getVar('gambar'),
            'deskripsi' =>$this->request->getVar('deskripsi'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin');
        
    }
}