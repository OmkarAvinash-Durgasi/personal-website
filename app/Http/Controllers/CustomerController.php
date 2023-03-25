<?php

namespace App\Http\Controllers;

use App\Models\CustomerInfo;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index(Request $request2): void
    {
        //CustomerInfo::all();
        echo 'Customer Index Page';
    }

    public function create()
    {
        return CustomerInfo::all();
    }

    public function any(): void
    {
        echo 'Customer Page';
    }
}
