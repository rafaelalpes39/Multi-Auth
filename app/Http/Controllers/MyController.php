<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MyController extends Controller
{
    public function raf(){

        $role=Auth::user()->role;

            if($role==1){
                    return view ('admin.dash');
            }
            else{
                return view('dashboard');
            }



    }
}
