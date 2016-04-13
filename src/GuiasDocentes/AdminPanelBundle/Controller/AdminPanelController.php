<?php

namespace GuiasDocentes\AdminPanelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminPanelController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuiasDocentesAdminPanelBundle::index.html.twig');
    }
    
    public function loginAction()
    {
        return $this->render('GuiasDocentesAdminPanelBundle::login.html.twig');
    }
}
