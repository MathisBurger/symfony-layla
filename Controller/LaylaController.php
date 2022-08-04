<?php
/**
 * This file is part of the nwsnet/core package
 *
 * © 2022 Die NetzWerkstatt GmbH & Co. KG <info@die-netzwerkstatt.de>
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

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