<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	public function index()
	{
		$result = 'Are you restful?';
		$this->data['content'] = $result;
		$this->render();
	}

}
