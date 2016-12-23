<?php
namespace App\Controller\cms;

class UserController extends CmsController
{
	public function index(){
		
	}

	public function login(){
		$this->viewBuilder()->layout(false);
	}

	public function restorePassword(){
		$this->viewBuilder()->layout(false);
	}
}
?>