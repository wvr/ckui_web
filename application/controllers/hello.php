<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hello extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		//
		echo "this is the init<br/>";		
	}
	
	public function index() {
		echo "this is my index";
	}
	
	public function one($name="wvr") {
		echo "test<br/>";
		
		$this->load->model("hello_model","model");
		//$profile = $this->hello_model->getProfile("willem");
		$profile = $this->model->getProfile("willem");
		
		
		
		//echo "params: $p1 , $p2";
		
		$this->load->view('header');
		
		$data = array("n"=> $name);
		$data['profile'] = $profile;
		$this->load->view('one', $data);
		
		
	}
	
	public function two() {
		echo "This is two";
	}
	

}