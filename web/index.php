<?php

$loader = require dirname(__DIR__).'/vendor/autoload.php';

class Website extends Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * @Sensio\Bundle\FrameworkExtraBundle\Configuration\Route("/")
     * @Sensio\Bundle\FrameworkExtraBundle\Configuration\Route("/{name}")
     */
    final public function homepage($name = 'world')
    {
        return new Symfony\Component\HttpFoundation\Response(
            sprintf('<p>Hello %s!</p>', $name)
        );
    }
}

Potherca\Katwizy\Bootstrap::run(
    $loader,
    Symfony\Component\HttpFoundation\Request::createFromGlobals()
);

/*EOF*/