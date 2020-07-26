<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MonCompteController extends AbstractController
{
    /**
     * @Route("/mon-compte", name="mon_compte")
     */
    public function index()
    {
        return $this->render('mon_compte/index.html.twig');
    }
}
