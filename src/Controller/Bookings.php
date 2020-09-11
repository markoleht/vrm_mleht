<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Bookings extends AbstractController
{
    /**
     * @Route("/bookings/")
     */
    public function bookings(): Response
    {
        return $this->render('bookings.html.twig');
    }
}