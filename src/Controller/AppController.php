<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Meter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class AppController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager) 
    {
      $this->entityManager = $entityManager;  
    }

    /**
     * @Route("/{id}", name="home")
     */
    public function homepage(Request $request, int $id)
    {
        $meter = $this->entityManager->getRepository(Meter::class)->find($id); 
  
        return $this->render('View//meter.html.twig', [
            'meter' => $meter
        ]);
    }
   
}