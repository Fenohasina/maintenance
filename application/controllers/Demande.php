<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Demande extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
	}

	function index() {
		$this->template->write('title', 'Demande', TRUE);
		$this->template->write('header', "Demande d'intervention de maintenance informatique" );
		$this->template->write_view('content', 'demande', '', true);

		$this->template->render();
	}

}