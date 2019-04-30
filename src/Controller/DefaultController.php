<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeTestBundle:Default:index.html.twig');
    }

    public static function test(){
        echo "Hi this";
    }
}
