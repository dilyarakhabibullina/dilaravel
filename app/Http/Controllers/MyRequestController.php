<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MyRequestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }


    public function myRequest(Request $request, File $file) {
        if ($request->isMethod('post')) {
           $request->flash();
         $msg = $request->except('_token');


           file_put_contents('myRequest.txt', $msg, FILE_APPEND );
           return redirect()->route('myRequest');
           
        }


        return view('myRequest');
            }
            
}
