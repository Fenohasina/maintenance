<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
	}

	function toutes() {
		$this->template->write('title', 'Liste', TRUE);
		$this->template->write('header', "Liste de toutes les interventions");
		$this->template->write_view('content', 'liste/toutes', '', true);

		$this->template->render();
	}

	function agents() {
		$this->template->write('title', 'Liste', TRUE);
		$this->template->write('header', "Liste des interventions par Agents de maintenance");
		$this->template->write_view('content', 'liste/agents', '', true);

		$this->template->render();
	}

	function services() {
		$this->template->write('title', 'Liste', TRUE);
		$this->template->write('header', "Liste des interventions par Services/Centres");
		$this->template->write_view('content', 'liste/services', '', true);

		$this->template->render();
	}	
}