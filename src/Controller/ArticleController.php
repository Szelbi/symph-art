<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController{

	public function index() {
		return new Response('<html lang="en"><body>Witam</body></html>');
	}
}