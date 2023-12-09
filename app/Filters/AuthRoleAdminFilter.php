<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthRoleAdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = NULL)
    {
        $session = session();

        if($session->type != "admin"){
            return redirect()->route('user_login_get');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = NULL)
    {
        // Do something here
    }
}