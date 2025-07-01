<?php

namespace App\Http\Controllers;

use App\Services\HelloService;

class HelloController extends Controller
{
    public function index()
    {
        $helloService = new HelloService(); //routedan geldi ve dedi ki helloService servisi oluştur
        return $helloService->sayHello();// sonra ise sayHello fonksiyonu caliştir
    }
}
