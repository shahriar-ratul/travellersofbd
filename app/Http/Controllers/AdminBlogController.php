<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use redirect;
use Auth;
use DB;
use App\CreateTrip;
use App\destination;
use App\TripComment;
use App\TripCommentReply;

use App\BlogTag;
use App\BlogPost;
class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth:admin');
         $this->middleware('verified');
     }
    public function index()
    {
        return view('admin.blog.show_blog');
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


    public function blog_show()
    {
      $data['blogs'] =\App\BlogPost::with('userName')->orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('admin.admin_pages.blog.blog_show',['data'=>$data,'i'=>'1']);
    }
    public function details_blog($id)
    {
      $data['blogs'] =\App\BlogPost::with('userName')->orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('admin.admin_pages.blog.blog_show',['data'=>$data,'i'=>'1']);
    }
    public function blog_create()
    {
      $data['blogs'] =\App\BlogPost::with('userName')->orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('admin.admin_pages.blog.create_blog',['data'=>$data,'i'=>'1']);
    }
    public function blog_edit($id)
    {
      $data['blogs'] =\App\BlogPost::with('userName')->orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('admin.admin_pages.blog.blog_show',['data'=>$data,'i'=>'1']);
    }
    public function blog_delete($id)
    {
      $data['blogs'] =\App\BlogPost::with('userName')->orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('admin.admin_pages.blog.blog_show',['data'=>$data,'i'=>'1']);
    }
    public function blog_store()
    {
      $data['blogs'] =\App\BlogPost::with('userName')->orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('admin.admin_pages.blog.blog_show',['data'=>$data,'i'=>'1']);
    }









    public function Show_tags()
    {
      $data['tags'] =\App\BlogTag::orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('admin.admin_pages.blog.blog_category_show',['data'=>$data,'i'=>'1']);
    }
    public function create_tags()
    {

      return view('admin.admin_pages.blog.blog_category_create');
    }
    public function store_tags(Request $request)
    {
      if($request->tag_id){
      $request->validate([
        'tag_name' => 'required|max:100',
        'description' => 'required|max:100',
      ]);
    }else{
      $request->validate([
        'tag_name' => 'required|max:100|unique:blog_tags',
        'description' => 'required|max:100',
        'image'=> 'required|image|max:15000',
      ]);
    }

       $post_model=new BlogTag();
       if($request->tag_id){
         $post_model=\App\BlogTag::where('tag_id',$request->tag_id)->first();
       }
       $post_model->tag_name=$request->tag_name;
       $post_model->description=$request->description;

       if($request->tag_id){
        $post_model->updated_at=time();
       }
       else{
         $post_model->updated_at=time();
         $post_model->created_at=time();
       }
       if($request->image){
         $avatar=$request->image;
         $filename ='_1_'.time().'.'.$avatar->getClientOriginalExtension();
         $path = public_path('/user_file_image/blog_category'.'/'.$filename);
         Image::make($avatar->getRealPath())->resize(360,220)->save($path);
         $post_model->image=$filename;
       }


       $post_model->save();


       if($request->tag_id){
         return
         redirect()
             ->back()
             ->with('success', 'Category Has been Updated successfully!');
       }

        return
        redirect()
            ->back()
            ->with('success', 'Category Has been Added successfully!');
      }
      public function delete_tag($id)
      {
        $tag_info = \App\BlogTag::where('tag_id',$id);
        $tag=$tag_info->first();
        $tag_info->delete();
          return redirect()->route('admin.blog.category.show')->with('success','Blog Category deleted successfully');
      }
      public function edit_tags($id)
      {
        $tag =\App\BlogTag::where('tag_id',$id)->first();
        return view('admin.admin_pages.blog.blog_category_edit',['tag'=>$tag]);
      }





}
