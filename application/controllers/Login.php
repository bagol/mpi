<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        
    }

    public function index()
    {
        if($this->session->userdata('role') !== null){
            $this->ceksession();
        }
        $this->load->view('login');
    }

    public function verifikasi()
    {
        $nip = $this->input->post('nip');
        $pass = $this->input->post('password');
        $verif = $this->M_user->getUser($nip)->num_rows();
        
        if($verif > 0){
            $user = $this->M_user->getUser($nip)->row();
            if (password_verify($pass, $user->password)) {
                $user = [
                    'nip'       => $user->nip,
                    'username'  => $user->username,
                    'email'     => $user->email,
                    'role'      => $user->role,
                    'penempatan'=> $user->penempatan,
                    'kantor'    => $user->kantor,
                    'foto'      => $user->foto
                ];
                $this->session->set_userdata($user);
                $this->session->set_flashdata('msg', 'Selamat Datang');
                logUser('login',$user['nip']);
                redirect('Login/ceksession');
            }else{
                $this->session->set_flashdata('msg', 'Password Salah !!!');
                redirect('Login');
            }
        }else{
            $this->session->set_flashdata('msg', 'NIP Tidak terdaftar !!!');
            redirect('Login');
        }

        
    }

    function ceksession(){
        if($this->session->userdata('role') == 'admin'){
            redirect('Admin');
        }else if($this->session->userdata('role') == 'penerima'){
            redirect('penerima');
        }else if($this->session->userdata('role') == 'penyidik'){
            redirect('penyidik');
        }else if($this->session->userdata('role') == 'resolusi'){
            redirect('resolusi');
        }else if ($this->session->userdata('role') == null) {
            redirect('Login');
        }
    }

    function logout(){
        //$this->session->unset_userdata();
        $this->session->sess_destroy();
        logUser('logout',$this->session->userdata('nip'));
        redirect('Login');
    }
}
