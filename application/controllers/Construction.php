<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Construction extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
	}

	function index() {
		$this->template->write('title', 'En construction', TRUE);
		$this->template->write_view('content', 'construction', '', true);

		$this->template->render();
	}
}