<?php

namespace crudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('crudBundle:Default:index.html.twig');
    }
}
