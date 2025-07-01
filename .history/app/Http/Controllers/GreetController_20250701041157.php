<?php

namespace App\Http\Controllers;

use App\Services\GreetingService;

class GreetController extends Controller
{
    protected $greeting;

    public function __construct(GreetingService $greeting)
    {
        $this->greeting = $greeting;
    }

    public function greet()
    {
        return $this->greeting->greet();
    }


    /*

    */
}
