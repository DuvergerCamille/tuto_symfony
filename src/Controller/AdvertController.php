<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use App\Entity\Advert;
use App\Entity\Image;
use App\Entity\Application;
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
		//mettre le namespace de l'entité correspondant au repository à demander dans getRepository
		$repository = $this->getDoctrine()->getManager()->getRepository('App\Entity\Advert');
  
	    // On récupère l'entité correspondante à l'id $id
	    $advert = $repository->find($id);
  
	    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
	    // ou null si l'id $id  n'existe pas, d'où ce if :
	    if (null === $advert) {
		  throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}
		
		 // On récupère la liste des candidatures de cette annonce
		 $listApplications = $em->getRepository('App\Entity\Application')->findBy(array('advert' => $advert));

		return $this->render('Advert/view.html.twig', ['advert' => $advert, 'listApplications' => $listApplications]);
	}

	public function add(Request $request)
	{
		 // Création de l'entité
		 $advert = new Advert();
		 $advert->setTitle('Recherche développeur pour le lol');
		 $advert->setAuthor('Jean-Eude');
		 $advert->setContent("Nous recherchons un développeur de memes de qualite sur Lyon. Blabla…");
		 // On peut ne pas définir ni la date ni la publication,
		 // car ces attributs sont définis automatiquement dans le constructeur

	     // Création de l'entité Image
    	 $image = new Image();
    	 $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    	 $image->setAlt('Job de rêve');

    	 // On lie l'image à l'annonce
		 $advert->setImage($image);
		 
		 // Création d'une première candidature
		 $application1 = new Application();
		 $application1->setAuthor('Marine');
		 $application1->setContent("J'ai toutes les qualités requises.");
	 
		 // Création d'une deuxième candidature par exemple
		 $application2 = new Application();
		 $application2->setAuthor('Pierre');
		 $application2->setContent("Je suis très motivé.");
	 
		 // On lie les candidatures à l'annonce
		 $application1->setAdvert($advert);
		 $application2->setAdvert($advert);
	 

		 // On récupère l'EntityManager
		 $em = $this->getDoctrine()->getManager();
	 
		 // Étape 1 : On « persiste » l'entité
		 $em->persist($advert);

		 // Étape 1 ter : pour cette relation pas de cascade lorsqu'on persiste Advert, car la relation est
  	     // définie dans l'entité Application et non Advert. On doit donc tout persister à la main ici.
    	 $em->persist($application1);
    	 $em->persist($application2);
	 
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
