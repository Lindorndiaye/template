<?php

namespace ALN\LindorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ALNLindorBundle:Default:index.html.twig');
    }
    public function layoutAction()
    {
        return $this->render('ALNLindorBundle::layout.html.twig');
    }
    public function indextemplateAction()
    {
        return $this->render('ALNLindorBundle:template:index.html.twig');
    }
    public function calendarAction()
    {
        return $this->render('ALNLindorBundle:template:calendar.html.twig');
    }
}
