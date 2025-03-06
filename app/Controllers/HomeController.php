<?php
namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller {
    public function index() {
        return $this->view('pages/home', [
			'title' => 'Welcome',
			'description' => '',
			'keywords' => '',
			'og_image' => 'og.jpg',
			'robots' => 'index, follow'
		]);
    }
}
