<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MX_Controller {

	
	public function index()
	{

      $data['title'] = 'Shopping Cart';
      $data['module'] = 'Cart';
      $data['content'] = 'Cart_content';

      $this->load->module('templates');
      $this->templates->admin($data);

		
	}
}
