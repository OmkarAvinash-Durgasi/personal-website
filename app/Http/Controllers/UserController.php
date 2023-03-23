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
    public function index(string $name = null): void
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
