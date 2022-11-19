<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $username = $session->get('username');
        
        $result['m_mahasiswa'] = '';
        $result['username'] = $username;
        
        return view('templates/topbar',).view('templates/sidebar', $result).view('templates/footer');
    }
}
