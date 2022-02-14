<?php

declare(strict_types=1);

namespace App\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

/**
 * Class LoginListener
 */
class LoginListener
{
    public function onSecurityLoginInteractive(InteractiveLoginEvent $event)
    {

    }

}