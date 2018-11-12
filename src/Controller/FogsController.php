<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FogsController extends AbstractController
{
    public function readAllAction()
    {
        return $this->render('fogs.html.twig');
    }

    public function readAction($id)
    {
        return new Response("Fog with id = $id");
    }
}