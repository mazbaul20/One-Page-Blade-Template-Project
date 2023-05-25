<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function Profile(Request $request){
        $name = $request->name;
        $age = $request->age;
        return "User name is {$name} and user age is {$age}";
    }
}
