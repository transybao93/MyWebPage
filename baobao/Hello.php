<?php 
class Hello extends CI_Controller{ 
    public function __construct(){ 
        parent::__construct(); 
        $this->load->helper('url');
    } 
    
    public function index(){ 
        $this->load->view("web1/home.php");
    } 

    //Chuyển trang
    public function home()
    {
        $this->load->view("web1/home.php");
    }
    public function about()
    {
        $this->load->view("web1/index-1.php");
    }
    public function gallery()
    {
        $this->load->view("web1/index-2.php");
    }
    public function video()
    {
        $this->load->view("web1/index-3.php");
    }
    public function contact()
    {
        $this->load->view("web1/index-4.php");
    }
}