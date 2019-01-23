<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Post;
use App\PostComment;
use redirect;
use Auth;
use DB;
class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
         // $this->middleware('verified');
     }
    public function index()
    {
        //
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
      $request->validate([
          'post' => 'required',
      ]);

     $post_model=new Post();
     $post_model->user_id=$request->user_id;
     $post_model->post=$request->post;

     $post_model->created_at=time();
     $post_model->updated_at=time();
     $post_model->save();
       return
       redirect()
         ->back()
         ->with('success', 'Post Has been Created successfully!');
    }
    public function store_post(Request $request)
    {
      $request->validate([
          'post_name' => 'required',

      ]);

     $post_model=new PostComment();
     $post_model->user_id=$request->user_id;
     $post_model->post_id=$request->post_id;
     $post_model->post=$request->post_name;

     $post_model->created_at=time();
     $post_model->updated_at=time();
     $post_model->save();
       return
       redirect()
         ->back();
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
    public function showPost()
    {
        $data['posts'] =\App\Post::with('userName')->get();
        return view('front.pages.community.community',['data'=>$data]);
    }
    public function blogDetails()
    {
       $id=4;
        $data =\App\BlogPost::where('blog_id',$id)->with('userName')->first();
        return view('front.pages.blog.single_blog',['data'=>$data]);
    }
    public function createBlog()
    {
        $data['blogs'] =\App\BlogPost::get();
        return view('front.pages.blog.create_blog',['data'=>$data]);
    }




}
