<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TugasModel;
use PDO;

class CRUDController extends BaseController
{
    public function index()
    {
        $model = new TugasModel();
        $data = $model->findAll();
        return view('index',[
            "data" => $data
        ]);
    }

    public function tambah(){

        return view('create');

    }

    public function simpan(){

        $model = new TugasModel();
        $judul =request()->getPost("judul");
        $penulis = request()->getPost("penulis");
        $penerbit = request()->getPost("penerbit");
        $tahun_terbit = request()->getPost("tahun_terbit");

        $model->insert([

            "judul" => $judul,
            "penulis" => $penulis,
            "penerbit" => $penerbit,
            "tahun_terbit" => $tahun_terbit

        ]);

        return redirect()->to(base_url('/'));
    }

    public function edit($id){

        $model = new TugasModel();
        $data = $model->find($id);
        return view('edit', [
            "data" => $data
        ]);
    }

    public function update($id){

        $model = new TugasModel();
        $judul =request()->getPost("judul");
        $penulis = request()->getPost("penulis");
        $penerbit = request()->getPost("penerbit");
        $tahun_terbit = request()->getPost("tahun_terbit");

        $model->update($id,[

            "judul"=>$judul,
            "penulis"=>$penulis,
            "penerbit"=>$penerbit,
            "tahun_terbit"=>$tahun_terbit
        ]);
        return redirect()->to(base_url('/'));
    }

    public function hapus($id){
        $model = new TugasModel();
        $model->delete($id);
        return redirect()->to(base_url('/'));
    }
}
