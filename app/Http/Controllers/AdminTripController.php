<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class AdminTripController extends Controller
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

        $data['trips'] =\App\CreateTrip::orderBy('created_at', 'desc')->paginate(10);
        // return view('admin.admin_pages.show_trips');
        // return view('admin.admin_pages.trip_details');
         return view('admin.admin_pages.trip.show_trips',['data'=>$data,'id'=>'1']);
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
    public function destination_show()
    {
      $data['destinations'] =\App\Destination::orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('admin.admin_pages.trip.destination_show',['data'=>$data,'i'=>'1']);
    }
    public function destination_create()
    {

      return view('admin.admin_pages.trip.destination_create');
    }
    public function destination_edit($id)
    {
      $destination =\App\Destination::where('id',$id)->first();
      return view('admin.admin_pages.trip.destination_edit',['destination'=>$destination]);
    }
    public function destination_delete($id)
    {
      $tag_info = \App\Destination::where('id',$id);
      $tag=$tag_info->first();
      $tag_info->delete();
        return redirect()->route('admin.trip.destination.show')->with('success','Destination has been deleted successfully');
    }

    public function destination_store(Request $request)
    {
    $request->validate([
      'destination' => 'required|max:100|unique:destinations',
    ]);

     $post_model=new Destination();
     if($request->id){
       $post_model=\App\Destination::where('id',$request->id)->first();
     }
     $post_model->destination=$request->destination;
     $post_model->created_at=time();
     $post_model->updated_at=time();
     $post_model->save();


     if($request->id){
       return
       redirect()
           ->back()
           ->with('success', 'Destination Has been Updated successfully!');
     }
      return
      redirect()
          ->back()
          ->with('success', 'Destination Has been Created successfully!');
    }
    public function show_trips(){
      $data['trips'] =\App\CreateTrip::orderBy('created_at', 'desc')->paginate(10);
      // return view('admin.admin_pages.show_trips');
      // return view('admin.admin_pages.trip_details');
       return view('admin.admin_pages.trip.show_trips',['data'=>$data,'id'=>'1']);
    }
    public function details_trip($id){
      $trip =\App\CreateTrip::where('trip_id',$id)->with('userName')->first();
      $data['comments'] =\App\TripComment::with('userName')->orderBy('created_at', 'desc')->where('trip_id',$id)->get();
      $data['reply'] =\App\TripCommentReply::with('userName')->orderBy('created_at', 'ASC')->get();
      // return view('admin.admin_pages.show_trips');
      // return view('admin.admin_pages.trip_details');
       return view('admin.admin_pages.trip.trip_details',['trip'=>$trip,'id'=>'1','data'=>$data]);
    }



     public function delete_trip($id)
    {
      $trip_info = \App\CreateTrip::where('trip_id',$id);
      $trip=$trip_info->first();
      $file1= $trip->image1;
      $file2= $trip->image2;
      $file3= $trip->image3;
      $file4= $trip->image4;
      if($file1!=null){
              $filepath = public_path().'/user_file_image/trips_image/'.$file1;
               \File::delete($filepath);
         }
      if($file2!=null){
              $filepath = public_path().'/user_file_image/trips_image/'.$file2;
               \File::delete($filepath);
         }
      if($file3!=null){
              $filepath = public_path().'/user_file_image/trips_image/'.$file3;
               \File::delete($filepath);
         }
      if($file4!=null){
              $filepath = public_path().'/user_file_image/trips_image/'.$file4;
               \File::delete($filepath);
         }
         $id=Auth::user()->id;
      $trip_info->delete();
        return redirect()->route('admin.trip.show')->with('success','trip deleted successfully');
    }


}
