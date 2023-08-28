<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SimpleCalculController extends Controller
{
    public function add(Request $request)
    {   
        $final = $request->first + $request->second;
        return $final;
    }

    public function minus(Request $request)
    {   
        $final = $request->first - $request->second;
        return $final;
    }

    public function multi(Request $request)
    {   
        $final = $request->first * $request->second;
        return $final;
    }

    public function division(Request $request)
    {   
        $final = $request->first / $request->second;
        return $final;
    }


}
