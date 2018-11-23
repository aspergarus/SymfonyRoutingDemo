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
        $ssoEnabled = $request->attributes->get('sso.auth');
        $token = $request->query->get('token');

        if ($ssoEnabled && empty($token)) {
            throw new \Exception("You are not authorized");
        }
    }
}
