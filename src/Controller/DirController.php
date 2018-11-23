<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DirController
{
    function feadFirst() {
        return new Response("Dir1");
    }

    function feadFirstId($id) {
        return new Response("Dir1: $id");
    }

    function feadSecond() {
        return new Response("Dir2");
    }

    function feadSecondId($id) {
        return new Response("Dir2: $id");
    }

}
