<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    public function index(Request $request2): void
=======
    public function index(string $name = null): void
>>>>>>> 8ee643196e28ba1f29c3d7cc2de4588127c999ec
=======
    public function index(string $name = null): void
>>>>>>> 8ee643196e28ba1f29c3d7cc2de4588127c999ec
    {
        echo $this->request->fullUrl().' '. 'name '. $name;
    }

    public function create()
    {
        return $this->request->getPort();
    }

    public function any(Request $laravelRequest)
    {
        echo $laravelRequest->fullUrl();
    }
}
