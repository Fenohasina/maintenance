<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intervention extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
	}

	function index()
	{
		$this->template->write('title', 'Intervention', TRUE);
		$this->template->write_view('content', 'intervention', '', true);
		
		$this->template->render();
	}

}