<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use redirect;
use Auth;
use DB;
use App\CreateTrip;
use App\BlogPost;
class Profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('verified');
     }
    public function index()
    {
        $data['trips'] =\App\CreateTrip::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
      return view('front.pages.profile.profile',['data'=>$data,'id'=>'1']);
    }
    public function profile($id)
    {
      $data['trips'] =\App\CreateTrip::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
      $data['blogs'] =\App\BlogPost::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
      return view('front.pages.profile.profile',['data'=>$data,'i'=>'1','j'=>'1']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
