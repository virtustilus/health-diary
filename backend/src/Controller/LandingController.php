<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Entity\StaticPage;

class LandingController extends AbstractController
{
    /**
     * @Route("/read/{slug}");
     */
    public function read(StaticPage $staticPage)
    {
        return $this->render('landing/read.html.twig', [
            'staticPage' => $staticPage
        ]);
    }
}