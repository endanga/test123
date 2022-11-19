<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;
helper('form');

class Login extends Controller
{
    public function index()
    {
        //return view('templates/login');
    }

    public function init(){
        $session = session();
        $username = $session->get('username');
        if($username != null || $username != ""){
            $result['m_mahasiswa'] = '';
            $result['username'] = $username;
            return view('templates/topbar').view('templates/sidebar', $result).view('templates/footer');
        }else{
            return view('login/login');
        }
    }

    public function loginuser()
    {
        $usermodel = new UsersModel();

        $session = session();
        $username = $session->get('username');
        if($username != null || $username != ""){
            $result['m_mahasiswa'] = '';
            $result['username'] = $username;
            return view('templates/topbar').view('templates/sidebar', $result).view('templates/footer');
        }else{
            $data = $usermodel->where('email', $this->request->getVar('email'))->and('password', 'admin123')->first();

            if($data != null && count($data) >= 1){
                $newdata = [
                    'username'  => $data['username'],
                    'email'     => $data['email'],
                    'logged_in' => true,
                ];
                
                $session->set($newdata);
                $result['m_mahasiswa'] = '';
                $result['username'] = $newdata['username'];
        
                return view('templates/topbar').view('templates/sidebar', $result).view('templates/footer'); 
            }
            
            return redirect()->to(base_url(''));
        }

        
    }

    public function logoutuser(){
        $session = session();
        $array_items = ['username', 'email', 'logged_in'];
        $session->remove($array_items);
        return redirect()->to(base_url(''));
    }
}