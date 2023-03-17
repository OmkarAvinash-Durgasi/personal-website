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
    public function index(Request $request2): void
    {
        echo 'User Index Page';
    }

    public function create(): void
    {
        echo 'User Create Page';
    }

    public function any(): void
    {
        echo 'User Page';
    }
}
