<?php

namespace GuiasDocentes\FAQBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FAQManagerController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuiasDocentesFAQBundle:Default:index.html.twig');
    }

    public function groupAction($perfil)
    {
        return $this->render('GuiasDocentesFAQBundle:Default:group.html.twig', array ('perfil' => $perfil));
    }
    
}
