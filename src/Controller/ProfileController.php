<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ProfileController
{
    /**
     * @param $request
     * @return Response
     * @throws \Exception
     */
    public function readProfile($request)
    {
        $this->auth($request);

        return new Response("Reading profile");
    }

    /**
     * @param $request
     * @return Response
     * @throws \Exception
     */
    public function updateProfile($request)
    {
        $this->auth($request);

        return new Response("Update profile");
    }

    /**
     * @param $request
     * @throws \Exception
     */
    private function auth($request) {
        $oauthEnabled = $request->attributes->get('oauth');

        $token = $request->query->get('token');

        if ($oauthEnabled && empty($token)) {
            throw new \Exception("You are not authorized");
        }
    }
}
