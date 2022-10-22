<?php

namespace MathisBurger\SymfonyLayla\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * The controller that plays the layla song.
 */
class LaylaController extends AbstractController
{
    /**
     * Renders a twig template, that plays the song.
     *
     * @return Response The rendered twig template
     */
    public function playLayla(): Response
    {
        return $this->render('@LaylaBundle/templates/layla-view.html.twig');
    }


}
