<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class AdvertController extends Controller
{
	/**
	 * @Route("/advert/{page}", name="oc_advert_index", requirements={"page" = "\d+"}, defaults={"page" = 1})
	 */
	public function index($page)
	{
		if ($page < 1)
		{
			throw $this->createNotFoundException('Page "'.$page.'" inexistante.');
		}
		return $this->render('Advert/index.html.twig');
	}

	public function view($id)
	{
		$advert = array(
			'title'   => 'Recherche développpeur Symfony2',
			'id'      => $id,
			'author'  => 'Alexandre',
			'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
			'date'    => new \Datetime()
		  );
		return $this->render('Advert/view.html.twig', ['advert' => $advert]);
	}

	public function add(Request $request)
	{
		if ($request->isMethod('POST'))
		{
			$this->addFlash('notice', 'Annonce bien enregistrée.');
			return $this->redirectToRoute('oc_advert_view',['id' => 5]);
		}

		return $this->render('Advert/add.html.twig');
	}

	public function edit($id, Request $request)
	{
		$advert = array(
			'title'   => 'Recherche développpeur Symfony',
			'id'      => $id,
			'author'  => 'Alexandre',
			'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
			'date'    => new \Datetime()
		  );
		return $this->render('Advert/edit.html.twig', ['advert' => $advert]);
	}

	public function delete($id)
	{
		return $this->render('Advert/delete.html.twig');
	}
}
