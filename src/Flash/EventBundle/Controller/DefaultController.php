<?php

namespace Flash\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FlashEventBundle:Password:index.html.twig');
    }
}
