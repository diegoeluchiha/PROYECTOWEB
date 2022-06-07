<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleAdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session=session();
        if ($session->type !="admin") {
            return redirect('login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}