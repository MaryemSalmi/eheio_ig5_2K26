<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController{
   #[Route(path: '/home',name: 'home_index')] 
   public function index(): Response{
    return new Response(content : "👋 Bonjour, ceci est mon premier contrôleur Symfony !");
   }
}



?>