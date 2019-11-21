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
                    'kantor'    => $user->kantor
                ];
                $this->session->set_userdata($user);
                $this->session->set_flashdata('msg', 'Selamat Datang');
                redirect('Admin');
                var_dump($this->session->userdata());
                echo "truue";
            }
                
            //     $this->session->set_userdata($user);
            //     $this->session->set_flashdata('msg', 'Selamat Datang');
            //     redirect('Admin');
            // }
        }else{
            echo "fals";
        }

        // if ($verif == 1) {
        //     $user = $this->M_user->getUser($nip)->row();
        //     var_dump($user);
        //     if (password_verify($pass, $user->password)) {
        //         $user = [
        //             'nip'       => $user->nip,
        //             'username'  => $user->username,
        //             'email'     => $user->email,
        //             'role'      => $user->role,
        //             'penempatan'=> $user->penempatan,
        //             'kantor'    => $user->kantor
        //         ];
        //         $this->session->set_userdata($user);
        //         $this->session->set_flashdata('msg', 'Selamat Datang');
        //         redirect('Admin');
        //     } else {
        //         var_dump($user);
        //         echo $nip;
        //         echo "salah pass";
        //         // $this->session->set_flashdata('msg', 'password salah !!!');
        //         // redirect('Login');
        //     }
        // }else {
        //     echo $nip;
        //     echo "nip salah";
        //     // $this->session->set_flashdata('msg', 'No NIP tidak terdaftar');
        //     // redirect('Login');
        // }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('Login');
    }
}
