<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users;
use App\Form\UsersType;
use Twig\Environment;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('oc_advert_index');
          }
      
          $authenticationUtils = $this->get('security.authentication_utils');
      
          return $this->render('users/login.html.twig', ['last_username' => $authenticationUtils->getLastUsername(), 'error' => $authenticationUtils->getLastAuthenticationError()]);
    }

    public function signUp(Request $request)
    {
        $user = new Users();

		$form   = $this->createForm(UsersType::class, $user);

		if ($request->isMethod('POST')) {
			
			$form->handleRequest($request);
	  
			if ($form->isValid()) {

              $user->setSalt('');
              $user->setRoles(array('ROLE_USER'));
			  $em = $this->getDoctrine()->getManager();
			  $em->persist($user);
			  $em->flush();
	  
			  $request->getSession()->getFlashBag()->add('notice', 'Bienvenu.e nouveau membre!');
	  
			  return $this->redirectToRoute('oc_advert_index');
			}
		  }
	  

		return $this->render('users/signUp.html.twig', ['form' => $form->createView()]);
    }

    public function edit($id, Request $request)
    {
        //manque des trucs
		$form   = $this->createForm(UsersType::class, $user);

		if ($request->isMethod('POST')) {
			
			$form->handleRequest($request);
	  
			if ($form->isValid()) {

              $user->setSalt('');
              $user->setRoles(array('ROLE_USER'));
			  $em = $this->getDoctrine()->getManager();
			  $em->persist($user);
			  $em->flush();
	  
			  $request->getSession()->getFlashBag()->add('notice', 'Bienvenu.e nouveau membre!');
	  
			  return $this->redirectToRoute('oc_advert_index');
			}
		  }
	  

		return $this->render('users/signUp.html.twig', ['form' => $form->createView()]);
	}
	 public function test(?UserInterface $user)
	 {
		if ($user) {
            return new Response(sprintf('Hello %s d Id %d!', $user->getUsername(), $user->getId()));
        }

        return new Response('Hello anonyme!');
	 }
}
