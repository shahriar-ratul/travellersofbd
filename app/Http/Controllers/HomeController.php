<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;
use App\BlogPost;
use redirect;
use Auth;
use DB;
use App\CreateTrip;
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
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $data['trips'] =\App\CreateTrip::with('userName')->orderBy('created_at', 'desc')->paginate(3);
       $data['trips'] =\App\CreateTrip::orderBy('created_at', 'desc')->paginate(9);
       $data['blogs'] =\App\BlogPost::with('userName')->orderBy('created_at', 'desc')->paginate(3);
       //$data['trip'] = DB::table('create_trips')->get();
        return view('front.pages.home',['data'=>$data]);
    }
}
