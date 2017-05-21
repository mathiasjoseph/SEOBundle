<?php

namespace Miky\Bundle\SEOBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MikySEOBundle:Default:index.html.twig');
    }
}
