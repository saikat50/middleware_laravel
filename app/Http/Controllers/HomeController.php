<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$request->session()->put(['saikat'=>'master student']);

        //$request->session()->get('saikat');

        //return $request->session()->all();

       // session(['saikat2'=>'your student']);

        //return session('saikat2');

        //$request->session()->forget('saikat2');

        //$request->session()->flush();

        //return $request->session()->all();

        //$request->session()->flash('message', 'your post has been created');

        return session()->get('message');


        //return view('home');
    }
}
