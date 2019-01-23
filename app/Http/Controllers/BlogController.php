<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\BlogPost;
use redirect;
use Auth;
use DB;
class BlogController extends Controller
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
          'title' => ['required','string','min:1','max:200'],
          'short_description' => ['required','min:1','max:50000'],
          'long_description' => ['required','min:1','max:500000'],
          'image' => ['required','max:500000'],

      ]);

     $blog_model=new BlogPost();
     if($request->user_id){
       $blog_model->user_id=$request->user_id;
     }
     if($request->admin_id){
       $blog_model->admin_id=$request->admin_id;
     }

     $blog_model->blog_title=$request->title;
     $blog_model->short_description=$request->short_description;
     $blog_model->long_description=$request->long_description;





     if($request->image){
       $avatar=$request->image;
       $filename =$request->blog_title.'_1_'.time().'.'.$avatar->getClientOriginalExtension();
       $path = public_path('/user_file_image/blog_image'.'/'.$filename);
       Image::make($avatar)->resize(750, 350)->save($path);
       $blog_model->blog_image_1=$filename;
     }

     $blog_model->created_at=time();
     $blog_model->updated_at=time();
     $blog_model->save();
       return
       redirect()
         ->back()
         ->with('success', 'Blog Has been Created successfully!');
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
    public function showBlogs()
    {
        $data['blogs'] =\App\BlogPost::with('userName')->paginate(10);
        $data['tags'] =\App\BlogTag::orderBy('created_at', 'desc')->get();
        return view('front.pages.blog.blog_list',['data'=>$data]);
    }
    public function blogDetails($id)
    {
        $data =\App\BlogPost::where('blog_id',$id)->with('userName')->first();
        return view('front.pages.blog.single_blog',['data'=>$data]);
    }
    public function createBlog()
    {
        $data['blogs'] =\App\BlogPost::paginate(5);
        return view('front.pages.blog.create_blog',['data'=>$data]);
    }




}
