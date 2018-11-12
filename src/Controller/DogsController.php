<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DogsController
{
    function readAllAction()
    {
        return new Response("Read all dogs");
    }

    function readAction($id)
    {
        return new Response("Dog with id = $id");
    }
}