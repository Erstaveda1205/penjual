<?php
class C_login extends CI_Controller
{
    function index()
    {
        $this->load->model('M_login');
        $this->load->view('login');
        if ($_POST) {
            $email = $this->input->post('email');
            $pass = $this->input->post('password');

            $users = $this->M_login->ceklogin(['email' => $email]);
            // Jika users ada 
            if ($users) {
                if ($users->password == md5($pass)) {
                    $sessi = [
                        'nama' => $users->first_name,
                        'level' => $users->level,
                        'id_user' => $users->id_user
                    ];
                    $this->session->set_userdata($sessi);
                    redirect(base_url() . 'C_beranda');
                } else {
                    echo "<script> alert('password tidak sesuai');</script>";
                }  
            } else {
                echo "<script> alert('email tidak terdaftar');</script>";
            }
        }
    }
    function keluar (){
        session_destroy();
        redirect('./');
    }
}
?>