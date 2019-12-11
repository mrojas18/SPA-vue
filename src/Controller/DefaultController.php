<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home_FE")
     * @Route("/{route}", name="vue_pages", requirements={"route"="^.+"})
     */
    public function indexAction()
    {
        $number = random_int(0, 100);

        return $this->render('index.html.twig'); 
       // return new Response(
        //    '<html><body>Lucky number: '.$number.'</body></html>'
       // );
    }
}