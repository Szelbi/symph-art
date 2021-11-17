<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController{

	/**
	 * @Route("/")
	 * @Method ({"GET"})
	 */
	public function index() {
//		return new Response('<html lang="en"><body>Witam</body></html>');

		$articles = ['First', 'Second', 'Third'];

		return $this->render('articles/index.html.twig', array(
			'articles' => $articles
		));

	}
}