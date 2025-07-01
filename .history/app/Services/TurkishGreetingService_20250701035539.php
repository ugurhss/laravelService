<?php

namespace App\Services;

class TurkishGreetingService implements GreetingService
{
    public function greet()
    {
        return "Selam!";
    }
}
