<?php

namespace App\Middlewares;

use Ballybran\Http\Middleware;

class Teste extends Middleware
{
    /**
     * This method will be triggered
     * when the middleware is called 
     *
     * @return bool
     */
    public function handle()
    {
        var_dump('teste');
        // your code...
        
        return true;
    }
}
