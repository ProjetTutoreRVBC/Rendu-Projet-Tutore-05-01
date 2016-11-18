<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Entity\User;

//Others
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// Form components
use AppBundle\Form\UserType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

class HomeController extends Controller
{
    /**
     * @Route("/",name="home")
     */
    public function indexAction(Request $request)
    {
      $user = new User();
      $form = $this->createForm(UserType::class,$user);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
          //$user = $form->getData();
          /*4
          $encoder = $form->get('security.password_encoder');
          $password = $encoder->encodePassword($user, $user->getPlainPassword());
          $user->setPassword($password);
          */
          return $this->redirectToRoute('login');
      }
      
      return $this->render('home/homepage.html.php', array(
        'form' => $form->createView(),
      ));
    }
    
     
}