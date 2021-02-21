<?php

namespace App\Demo\Controller;

use Framework\Router\Annotation\Route;
use Framework\Renderer\RendererInterface;

class DemoController
{

    /**
     * Montre l'index de l'application
     * $renderer est injecté automatiquement, comme toutes les classes
     * renseignées dans config/config.php
     * Il est possible d'injecter la ServerRequestInterface
     * et les paramètres de la route (ex. $id).
     * Ce type d'injection est possible avec \DI\Container de PHP-DI
     * 
     * @Route("/", name="demo.index", methods={"GET"})
     *
     * @param RendererInterface $renderer
     * @return string
     */
    public function index(
        RendererInterface $renderer
    ): string {
        return $renderer->render('@demo/index');
    }
}
