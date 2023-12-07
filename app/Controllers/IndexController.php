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

        $model2 =  \App\Models\TesteModel::create([ 'author'=> 'ABCD', 'title'=> 'DFDFDFDDF']);
        dd($model2);

        return blade('hello');
    }
}
