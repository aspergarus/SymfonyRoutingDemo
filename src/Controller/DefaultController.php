<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    function index() {
        return new Response("Default controller");
    }

    function sub() {
        return new Response("Hello from sub domain logic");
    }
}
