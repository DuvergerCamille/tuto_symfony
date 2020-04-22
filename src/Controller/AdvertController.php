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
		return $this->render('Advert/view.html.twig', ['id' => $id,]);
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
		if ($request->isMethod('POST'))
		{
			$this->addFlash('notice', ['id' => 5]);
			return $this->redirectToRoute('oc_advert_view',['id' => 5]);
		}
		return $this->render('Advert/edit.html.twig');
	}

	public function delete($id)
	{
		return $this->render('Advert/delete.html.twig');
	}
}
