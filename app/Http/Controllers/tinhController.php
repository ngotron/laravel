<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tinhController extends Controller
{
    //
    function getData(Request $request)
    {
        $request->validate([
            'a' => 'required|integer',
            'b' => 'required|integer',
        ]);

        // $a = $request->input("a");
        // $b = $request->input("b");

        $a = $request->query("a");
        $b = $request->query("b");

        if ($a == 0) {
        } else {
            $kq = "Phương trình có một nghiệm X =" . (-$b / $a);
        }
        // ['kq'=$kq]
        return view('phepTinh',  compact("a", "b", "kq"));
    }
}
