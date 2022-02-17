<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 */
class IndexController extends AbstractController
{
    /**
     * @return Response
     *
     * @Route("/")
     */
    public function index(): Response
    {
        return $this->render("index.html.twig");
    }
}