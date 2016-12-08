<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);
        if ($request->isMethod('POST')) {
          if ($form->isSubmitted() && $form->isValid()){
              // Encode the new users password
              $encoder = $form->get('security.password_encoder');
              $password = $encoder->encodePassword($user, $user->getPlainPassword());
              $user->setPassword($password);
              // Set their role
              //$user->setRole('ROLE_USER');

              // Save
              //$em = $this->getDoctrine()->getManager();
              //$em->persist($user);
              //$em->flush();
              return $this->redirectToRoute('login');
          }
        }
        return $this->render('home/homepage.html.php', array(
          'form' => $form->createView(),
        ));
    }
    
     
}