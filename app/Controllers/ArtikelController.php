<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\RESTful\ResourceController;

class ArtikelController extends ResourceController
{
    protected $modelName = 'App\Models\ArtikelModel';
    protected $format    = 'json'; 
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function lihat()
    {
        $data = [
            'title' => 'List Solusi',
            'artikel' => $this->model->getArtikel(),
        ];

        return view('admin/artikel', $data);
    }

    public function lihat_artikel($id){
        $artikelModel = new ArtikelModel();
        //dd($id);
        $artikel = $artikelModel
        ->select('artikel.*') 
        ->find($id);
        //dd($programs); 
        return view('admin/detail_artikel',['artikel'=>$artikel]);
    }

    public function lihat2()
    {
        $data = [
            'title' => 'List Solusi',
            'artikel' => $this->model->getArtikel(),
        ];

        return view('user/article', $data);
    }

    public function lihat_article($id){
        $artikelModel = new ArtikelModel();
        //dd($id);
        $artikel = $artikelModel
        ->select('artikel.*') 
        ->find($id);
        //dd($programs); 
        return view('user/detail_article',['artikel'=>$artikel]);
    }

    public function index()
    {
        $data = [
            'message' => 'success', 
            'artikel' => $this->model->orderBy('id', 'DESC')->findAll()
        ];

        return $this->respond($data, 200); 
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data = [
            'message' => 'success', 
            'artikel_byid' => $this->model->find($id)
        ];

        if($data['artikel_byid'] == null){
            return $this->failNotFound('Artikel tidak ditemukan'); 
        }

        return $this->respond($data, 200); 
    }

    public function create()
    {
        $rules = $this->validate([
            'judul' => 'required', 
            'deskripsi' => 'required', 
        ]);

        if(!$rules){
            $response = [
                'message' => $this->validator->getErrors()
            ];
            
            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'judul' => esc($this->request->getVar('judul')), 
            'deskripsi' => esc($this->request->getVar('deskripsi')),
        ]); 

        $response = [
            'message' => 'Artikel berhasil ditambahkan', 
        ]; 

        return $this->respondCreated($response);
    }

    public function update($id = null)
    {
        $rules = $this->validate([
            'judul' => 'required', 
            'deskripsi' => 'required', 
        ]);

        if(!$rules){
            $response = [
                'message' => $this->validator->getErrors()
            ];
            
            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'judul' => esc($this->request->getVar('judul')), 
            'deskripsi' => esc($this->request->getVar('deskripsi')),
        ]); 

        $response = [
            'message' => 'Artikel berhasil diubah', 
        ]; 

        return $this->respond($response, 200);
    }

    public function delete($id = null)
    {
        $this->model->delete($id); 

        $response = [
            'message' => 'Artikel berhasil dihapus', 
        ]; 

        return $this->respondDeleted($response);
    }
}
