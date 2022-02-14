<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\LdapUser;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class loginForm
 */
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", TextType::class, [
            "required" => true,
            "label" => "Nom d'utilisateur",
            ])
            ->add("password", TextType::class, [
               "required" => true,
                "label" => "Mot de passe",
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'allowed_states' => null,
        ]);
    }

    public function getParent(): string
    {
        return UserType::class;
    }
}