<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatsController
{
    /**
     * Matches /cats exactly
     *
     * @Route("/api/v1/cats", name="cats_list")
     */
    public function readAllAction()
    {
        return new Response("Read all cats");
    }

    /**
     * Matches /api/v1/cats/*
     *
     * @Route("/api/v1/cats/{id}", name="read_cat")
     */
    public function readAction($id)
    {
        return new Response("Cat with id = $id");
    }
}
