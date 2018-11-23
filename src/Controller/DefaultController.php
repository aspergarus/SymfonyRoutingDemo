<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends AbstractController
{
    function index() {
        $url = $this->generateUrl(
            'localesExample',
            ['_locale' => 'ua']
        );
        return new Response("Default controller. $url");
    }

    function sub() {
        return new Response("Hello from sub domain logic");
    }

    function default($state) {
        return new Response("My state is always with me: $state");
    }

    function locale(Request $request) {
        $locale = $request->getLocale();

        return new Response("Locale example page $locale");
    }

}
