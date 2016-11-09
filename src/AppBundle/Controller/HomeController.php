<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/",name="homepage")
     */
    public function indexAction()
    {
        return $this->render('home/homepage.html.twig');
    }
}