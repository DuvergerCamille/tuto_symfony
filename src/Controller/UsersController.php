<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    public function signUp()
    {
        
    }
}
