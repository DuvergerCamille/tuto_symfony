<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use App\Entity\Advert;
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
		 // Création de l'entité
		 $advert = new Advert();
		 $advert->setTitle('Recherche développeur Symfony.');
		 $advert->setAuthor('Alexandre');
		 $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");
		 // On peut ne pas définir ni la date ni la publication,
		 // car ces attributs sont définis automatiquement dans le constructeur
	 
		 // On récupère l'EntityManager
		 $em = $this->getDoctrine()->getManager();
	 
		 // Étape 1 : On « persiste » l'entité
		 $em->persist($advert);
	 
		 // Étape 2 : On « flush » tout ce qui a été persisté avant
		 $em->flush();
	 
		 // Reste de la méthode qu'on avait déjà écrit
		 if ($request->isMethod('POST')) {
		   $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	 
		   // Puis on redirige vers la page de visualisation de cettte annonce
		   return $this->redirectToRoute('oc_advert_view', ['id' => $advert->getId()]);
		 }
	 
		 // Si on n'est pas en POST, alors on affiche le formulaire
		 return $this->render('Advert/add.html.twig', ['advert' => $advert]);
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
