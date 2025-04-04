<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function blog()
	{
		$this->load->view('blog');
	}

	public function blog_details()
	{
		$this->load->view('blog_details');
	}

	public function services()
	{
		$this->load->view('services');
	}

	public function contact()
	{
		$this->load->view('contact');
	}
}
