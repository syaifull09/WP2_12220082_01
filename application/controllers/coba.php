<?php 
class coba extends CI_Controller
{
    public function index()
    {
        //code...
        echo "selamat datang di web programing II";
        
    }
    public function biodata($nama=null,$nim=null)
    {
       // echo"nama: $nama <br>";
       // echo"nim : $nim";
       $data["nama"]=$nama;
       $data["nim"]=$nim;
       $this->load->view("view_coba",$data);
    }
}