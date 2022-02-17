<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class AuthentificationController
 */
class AuthentificationController extends AbstractController
{
    /**
     * @Route ("/login")
     *
     * @param AuthenticationUtils $authenticationUtils
     *
     * @return Response
     */
    public function login( AuthenticationUtils $authenticationUtils): Response
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        // create user form
        $form = $this->createForm(UserType::class);

        return $this->render("login.html.twig", [
            "lastUsername" => $lastUsername,
            "error" =>$error,
        ]);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $providerKey)) {
            return new RedirectResponse($targetPath);
        }
        //on renvoie à la liste des utilisateurs
        return new RedirectResponse($this->urlGenerator->generate('utilisateur_index'));
    }

    /**
     * @Route ("/logout")
     */
    public function logout()
    {

    }
}