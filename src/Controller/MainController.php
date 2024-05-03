<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Hello World! Hello <strong>Dima Maimesko!</strong>');
    }
}
