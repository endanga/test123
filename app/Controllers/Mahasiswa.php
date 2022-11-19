<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
use CodeIgniter\Controller;
helper('form');

class Mahasiswa extends Controller
{
    public function index()
    {

        $mahasiswaModel = new MahasiswaModel();
        $session = session();
        $username = $session->get('username');
        if($username != null || $username != ""){
            $result['m_mahasiswa'] = 'active';
            $result['username'] = $username;
        
            return  view('templates/sidebar', $result).view('templates/topbar').view('mahasiswa/index', $result).view('templates/footer');
        }else{
            return redirect()->to(base_url('')); 
        }
       
    }

    public function getalldata(){
        $mahasiswaModel = new MahasiswaModel();
        $result = $mahasiswaModel->findAll();
        echo json_encode($result);
    }

    public function new(){
        $mahasiswaModel = new MahasiswaModel();
        $data = [
            'nama' => $this->request->getVar('n_name'),
            'nim'  => $this->request->getVar('n_nim'),
            'jurusan'  => $this->request->getVar('n_jurusan'),
        ];
        $mahasiswaModel->insert($data);
        return $this->response->redirect(site_url('/mahasiswa'));
    }
}
