<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TinhToanController extends Controller
{
    public function Tinhtoan(Request $request ){
        $request->validate([
            'a' => 'required|integer',
            'b' => 'required|integer',
        ]);
        
        $a = $request->input("a");
        $b = $request->input("b");
        $c = $request->input("c");
        if($c== 'cc')
            $kq = $a + $b;
        else if($c== 'tr')
            $kq = $a - $b;
        else if($c== 'nh')
            $kq=$a*$b;
        else
            $kq=$a/$b;
        return view('phepTinh',['kq'=>$kq,'a'=>$a,'b'=>$b, 'c'=>$c]);
}


}
