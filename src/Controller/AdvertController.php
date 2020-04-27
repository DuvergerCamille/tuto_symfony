<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use App\Entity\Advert;
use App\Form\AdvertType;
use App\Entity\Image;
use App\Entity\Application;
use App\Entity\AdvertSkill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
		$em = $this->getDoctrine()->getManager()->getRepository('App\Entity\Application');
		$em2 = $this->getDoctrine()->getManager()->getRepository('App\Entity\AdvertSkill');
	    $advert = $repository->find($id);
  
	    if (null === $advert) {
		  throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
		}

		 $listApplications = $em->findBy(array('advert' => $advert));
		 $listAdvertSkills = $em2->findBy(array('advert' => $advert))
    ;

		return $this->render('Advert/view.html.twig', ['advert' => $advert, 'listApplications' => $listApplications, 'listAdvertSkills' => $listAdvertSkills]);
	}

	public function add(Request $request)
	{

		$advert = new Advert();

		$form   = $this->createForm(AdvertType::class, $advert);

		if ($request->isMethod('POST')) {
			
			$form->handleRequest($request);
	  
			if ($form->isValid()) {
			  $em = $this->getDoctrine()->getManager();
			  $em->persist($advert);
			  $em->flush();
	  
			  $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	  
			  return $this->redirectToRoute('oc_advert_view', ['id' => $advert->getId()]);
			}
		  }
	  

		return $this->render('Advert/add.html.twig', ['form' => $form->createView()]);
	}

	public function edit($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();

	    $advert = $em->getRepository('App\Entity\Advert')->find($id);

	    if (null === $advert) {
	      throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
	    }

	    $listCategories = $em->getRepository('App\Entity\Category')->findAll();

  	    foreach ($listCategories as $category) {
		  $advert->addCategory($category);
		}
		 
    	$em->flush();
		return $this->render('Advert/edit.html.twig', ['advert' => $advert]);
	}

	public function delete($id)
	{
		$em = $this->getDoctrine()->getManager();

    	$advert = $em->getRepository('App\Entity\Advert')->find($id);

    	if (null === $advert) {
    	  throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
    	}

   		foreach ($advert->getCategories() as $category) {
      		$advert->removeCategory($category);
    	}

	    $em->flush();
		return $this->render('Advert/delete.html.twig');
	}

}
