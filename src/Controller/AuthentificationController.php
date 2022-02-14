<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AuthentificationController
 */
class AuthentificationController extends AbstractController
{

    /**
     * @Route ("/login")
     *
     * @param Request $request
     */
    public function login( Request $request)
    {
        // create user form
        $form = $this->createForm(UserType::class);

        $this->render("login.html.twig", [
            "form" => $form,
        ]);
    }

    /**
     * @Route ("/logout")
     */
    public function logout()
    {

    }
}