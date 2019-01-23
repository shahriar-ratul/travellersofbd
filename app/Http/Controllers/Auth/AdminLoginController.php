<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/admin';

     public function __construct()
    {
        $this->middleware('guest:admin',['except'=>['logout']]);
    }
    public function index()
    {
        //
    }

    public function showLoginForm(){
        return view('admin.auth.login');
    }
    public function login(Request $request){

        // validate the form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        // attempt to log the user in
        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            // if successful then redirect to their intended location
            return redirect()->intended(route('admin'));

        }
        // if unsuccessful then redirect to their intended location
        return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logout(Request $request)
      {
          Auth::guard('admin')->logout();
          return redirect()->guest(route( 'admin.login' ));
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
