<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class LandingController extends AbstractController
{
    /**
     * @Route("/read/{name}");
     */
    public function read(string $name)
    {
        return $this->render('landing/read.html.twig');
    }
}