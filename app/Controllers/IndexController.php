<?php

namespace App\Controllers;

use Ballybran\Http\{Request, Response};

class IndexController extends Controller
{

    /**
     * Main method for this controller.
     *
     * @param Request $request
     *
     * @return Response|string
     */


    function main(Request $request): Response
    {
        return blade('hello');
    }
}
