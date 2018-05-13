<?php
/**
 * Created by PhpStorm.
 * User: polomurchu
 * Date: 13/05/2018
 * Time: 17:05
 */

namespace App\Security;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;


class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
        return new Response('Sorry - you do not have Access - Access Denied!', 403);
    }
}