<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contoh1 extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
      echo "<h1>Perkenalkan</h1>";
      echo "Nama Muhamad Syaiful <br>
        Saya tinggal di daerah Kricak Jatimulya <br>
        Olahraga yang saya sukai adalah sepeda";
    }
}