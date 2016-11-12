<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChannelController extends Controller
{
    /**
     * @Route("/feed/channel/{id}", requirements={"id": "\d+"})
     */
    public function indexAction($id=1)
    {
        $function=2;
        return $this->render('lucky/number.html.php',array(
          "number"=>$id,
          "function"=>$function
        ));
    }    
}