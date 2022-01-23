<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class IsLoggedIn implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $segment = $request->uri->getSegments();
        $stopFilter = ['login'];
        $isStopUri = in_array($segment[1], $stopFilter);

        if ($segment[0] == 'panel' && !$isStopUri && !session()->isLogin) {
            return redirect()->to(route_to('admin_login'));
        }

        if ($segment[0] == 'panel' && $isStopUri && session()->isLogin){
            return redirect()->to(route_to('admin_index'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}