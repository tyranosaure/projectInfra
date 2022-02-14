<?php

declare(strict_types=1);

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 * @package App\Controller
 * @Route ("/index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route ("/")
     */
    public function index()
    {
        return $this->render("index.html.twig");
    }
}