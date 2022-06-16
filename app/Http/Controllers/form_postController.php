<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class form_postController extends Controller
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
            if ($b == 0) {
                $kq = "Phương trình vô số nghiệm";
            } else {
                $kq = "Phương trình vô số nghiệm";
            }
        } else {
            $kq = "Phương trình có một nghiệm X =" . (-$b / $a);
        }
        // ['kq'=$kq]
        return view('form_post',  compact("a", "b", "kq"));
    }
}
