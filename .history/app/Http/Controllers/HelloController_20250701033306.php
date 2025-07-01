<?php

namespace App\Http\Controllers;

use App\Services\HelloService;

class HelloController extends Controller
{
    public function index()
    {
        $helloService = new HelloService(); // Service Container yok!
        return $helloService->sayHello();
    }
}
