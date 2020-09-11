<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreateBooking extends AbstractController
{
    /**
     * @Route("/create_booking/")
     */
    public function createBooking(): Response
    {

        return $this->render('create_booking.html.twig');
    }
}