<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

namespace App\Controller\Admin;

use App\Entity\Meter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;


class DashboardController extends AbstractDashboardController
{
   
   /**
     * @Route("/admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(MeterCrudController::class)->generateUrl());

    }
    
    public function configureMenuItems(): iterable

    {
        yield MenuItem::section('Menu');  
        yield MenuItem::linkToCrud('Meter', 'icon class', Meter::class);
    } 
}
