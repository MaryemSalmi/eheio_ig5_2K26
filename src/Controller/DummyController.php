<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController{
   #[Route(path: '/dummy/{name}',name: 'app_dummy')] 
   public function index(string $name): Response{
    return $this->render(view: 'dummy/index.html.twig',parameters:['name'=>$name]) ;
   }
}



?>