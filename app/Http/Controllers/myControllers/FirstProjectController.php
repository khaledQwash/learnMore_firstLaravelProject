<?php

namespace App\Http\Controllers\myControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstProjectController extends Controller
{
    function hi($index = null)
    {
        $names = ['khaled', 'shimaa', 'omar', 'abed'];
        $name = "";
        if ($index==null) {
            return view('hello');
        }
        if (isset($names[$index])) {
            $name = $names[$index];
        }else{
            $name = $index;
        }
        // return view('hello')->with('name', $name);
        // return view('hello')->with('name', $name);
        // return view('hello', [
        //     'name'=>$name
        // ]);
        return view('hello', compact('name'));

    }
    function test1($name)
    {
        echo "<h1>$name</h1>";
    }

    function test2($name = null)
    {
        if ($name) {
            echo "<h1>$name</h1>";
        } else {
            echo "<h1>Without name</h1>";
        }
    }
}
