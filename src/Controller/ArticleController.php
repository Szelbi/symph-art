<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{

	/**
	 * @Route("/")
	 * @Method ({"GET"})
	 */
	public function index()
	{
//		return new Response('<html lang="en"><body>Witam</body></html>');

		$articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

		return $this->render('articles/index.html.twig', array(
			'articles' => $articles
		));

	}

	/**
	 * @Route("/article/save")
	 */
	public function save()
	{
		$entityManager = $this->getDoctrine()->getManager();

		$article = new Article();
		$article->setTitle('Article One');
		$article->setBody('Body for article One');

		$entityManager->persist($article);

		$entityManager->flush();

		return new Response('Saves and article with with id of'. $article->getId());
	}

}