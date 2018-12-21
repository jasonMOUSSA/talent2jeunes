<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}

	public function blog(){

		$this->load->view('blog');
	}
	public function about(){

		$this->load->view('about');
	}
	public function single(){

		$this->load->view('single-post');
	}
}
