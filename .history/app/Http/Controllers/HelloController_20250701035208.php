<?php

namespace App\Http\Controllers;

use App\Services\HelloService;

class HelloController extends Controller
{
    public function index()
    {
        $helloService = new HelloService(); //routedan geldi ve dedi ki helloService servisi oluştur
        return $helloService->sayHello();// sonra ise sayHello fonksiyonu caliştir

        /** Service Container kullanmadık  bu durumun adı Elle instance almak */
    }
// *********************************************************************************************************************************************************************
    protected $helloService;

    public function __construct(HelloService $helloService)
    {
        $this->helloService = $helloService;
    }

    public function indexService()
    {
        return $this->helloService->sayHello();
    }
/*
 /hello-service route istegi
     ↓
route controller + metod belirler
     ↓
service container controller oluşturur __construct çalışır
     ↓
metod çağrılır indexService
     ↓
servis metodu çalışır  sayHello
     ↓
sonuç döner

*/


}
