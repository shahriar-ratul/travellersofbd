<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use redirect;
use Auth;
use DB;
use App\CreateTrip;
use App\destination;
use App\TripComment;
use App\TripCommentReply;

class TripController extends Controller
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
      $data['trips'] =\App\CreateTrip::orderBy('created_at', 'desc')->paginate(3);
       return view('front.pages.home',['data'=>$data]);
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
// 'required|numeric|digits_between:10,15'
// 'required|string|min:7|max:50'
      $request->validate([
          'destination' => 'required',
          'trip_title' => 'required',
          'from_date' => 'required',
          'to_date' => 'required',
          'contact' => 'required',
          'member_type' => 'required',
          'short_description' => ['required','string','min:20','max:500'],
          'place_want_to_see' => ['required','min:1','max:300'],

      ]);


     //dump($request->all());


    // $list = array( 'foo', 'bar', 'baz' );
    // echo implode( ", ", $list );
    // outputs: foo, bar, baz


    // $keywords = explode( ', ', 'foo, bar, baz' );
    // print_r( $keywords );

     $destination = implode( ", ", $request->destination);
     $trip_model = new CreateTrip();
     $trip_model->user_id=$request->user_id;
     $trip_model->destination= $destination;
     $trip_model->find_gender=$request->member_type;
     $trip_model->work_and_travel=$request->work_and_travel;
     $trip_model->trip_title=$request->trip_title;
     $trip_model->first_time_visit=$request->first_time_visit;
     $trip_model->accomodation=$request->accomodation;
     $trip_model->budget=$request->budget_id;
     $trip_model->room_sharing=$request->room_share;
     $trip_model->Itinerary=$request->intinerary_id;
     $trip_model->short_description=$request->short_description;
     $trip_model->place_want_to_see=$request->place_want_to_see;
     $trip_model->things_want_to_do=$request->things_to_do;
     $trip_model->contact_no=$request->contact;
     $trip_model->member_list=$request->how_many_member;
     $trip_model->meeting_before_trip=$request->meeting_before_trip;

    if($request->image1){
      $avatar=$request->image1;
      $filename =$request->trip_title.'_1_'.time().'.'.$avatar->getClientOriginalExtension();
      $path = public_path('/user_file_image/trips_image'.'/'.$filename);
      Image::make($avatar->getRealPath())->resize(800, 450)->save($path);
      $trip_model->image1=$filename;
    }
    if($request->image1){
      $avatar=$request->image1;
      $filename =$request->trip_title.'_4_'.time().'.'.$avatar->getClientOriginalExtension();
      $path = public_path('/user_file_image/trips_image'.'/'.$filename);
      Image::make($avatar->getRealPath())->resize(690, 944)->save($path);
      $trip_model->image4=$filename;
    }



    if($request->image2){
      $avatar=$request->image2;
      $filename1 =$request->trip_title.'_2_'.time().'.'.$avatar->getClientOriginalExtension();
      $path = public_path('/user_file_image/trips_image'.'/'.$filename1);
      Image::make($avatar->getRealPath())->resize(800, 450)->save($path);
      $trip_model->image2=$filename1;
    }


    if($request->image3){
      $avatar=$request->image3;
      $filename2 =$request->trip_title.'_3_'.time().'.'.$avatar->getClientOriginalExtension();
      $path = public_path('/user_file_image/trips_image'.'/'.$filename2);
      Image::make($avatar->getRealPath())->resize(800, 450)->save($path);
      $trip_model->image3=$filename2;
    }






     $dateToday= $request->from_date;
     $dateToday = str_replace('/', '-', $dateToday);
     $newDate = date("Y-m-d", strtotime($dateToday));
     $trip_model->from_date=$newDate;

     $dateToday1=$request->to_date;
     $dateToday1 = str_replace('/', '-', $dateToday1);
     $newDate1 =  date("Y-m-d", strtotime($dateToday1));
     $trip_model->to_date=$newDate1;

     $date1 = date_create($newDate);
     $date2 = date_create($newDate1);
     //difference between two dates
     $diff = date_diff($date1,$date2);

     //count days
     $trip_model->how_many_days=$diff->format("%a Days Trip");

    // $date=date_create($request->from_date);
    // echo date_format($date,"Y-m-d ");



    // $time = strtotime($request->from_date);
    // $date = getDate($time);
    // print_r($date);



    //$dateToday = date("d-m-Y");
    // $dateToday=$request->from_date;
    // $newDate = date("Y-m-d", strtotime($dateToday));
    // echo $newDate;

    // $dateFromDatabase = "2012-12-27";
   // $reverseDate = date("d-m-Y", strtotime($dateFromDatabase));

    $trip_model->created_by=Auth::user()->id;
    $trip_model->updated_by=Auth::user()->id;
    $trip_model->created_at=time();
    $trip_model->updated_at=time();
    $trip_model->save();
      return
      redirect()
        ->back()
        ->with('success', 'Trip Has been Created successfully!');
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
    public function showTrips()
    {
       $data['districts'] = DB::table('destinations')->get();
       $data['trips'] =\App\CreateTrip::with('userName')->orderBy('created_at', 'desc')->paginate(20);
       return view('front.pages.trip.show_trip',['data'=>$data]);

    }
    public function search(Request $request)
    {
       // dump($request->all());
       $data['districts'] = DB::table('destinations')->get();
       if(($request->destination)||($request->from_date)&&($request->to_date)||($request->budget_id)!=NULL){
         if($request->budget_id){
               $budget_id=$request->budget_id;
              $data['trips'] =\App\CreateTrip::where('budget',$budget_id)->with('userName')->orderBy('created_at', 'desc')->paginate(20);
           }

         if($request->destination){
              $destination = implode( ", ", $request->destination);
              $data['trips'] =\App\CreateTrip::
                where('destination', 'LIKE', '%'.$destination.'%')
              ->with('userName')
              ->orderBy('created_at', 'desc')
              ->paginate(20);
           }

           if(($request->from_date)&&($request->to_date)){
                           $start=$request->from_date;
                           $start = str_replace('/', '-', $start);
                           $start = date("Y-m-d", strtotime($start));
                           $end=$request->to_date;
                           $end = str_replace('/', '-', $end);
                           $end = date("Y-m-d", strtotime($end));
                           $data['trips']=\App\CreateTrip::whereBetween('from_date', [$start,$end])->paginate(20);
                           // $data['trips']=\App\CreateTrip::whereBetween('to_date', [$start,$end])->paginate(20);
         }
          return view('front.pages.trip.show_trip',['data'=>$data]);
       }

       else{
         $data['districts'] = DB::table('destinations')->get();
        return view('front.pages.trip.show_trip',['data'=>$data])->with('error', 'No trips Found!');;
      }





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
        return redirect()->route('user.profile', ['id' => $id])->with('success','trip deleted successfully');
    }




    public function tripdetails($id)
    {
      $data['trips'] =\App\CreateTrip::where('trip_id',$id)->with('userName')->first();
      $data['trips_1'] =\App\CreateTrip::with('userName')->where('trip_id','<>',$id)->orderBy('created_at', 'desc')->paginate(3);
      $data['posts'] =\App\TripComment::with('userName')->orderBy('created_at', 'desc')->get();
      $data['comments'] =\App\TripCommentReply::with('userName')->orderBy('created_at', 'ASC')->get();

      return view('front.pages.trip.trip_details',['data'=>$data]);
    }

    public function store_comment(Request $request)
    {
      $request->validate([
          'post' => 'required',
      ]);

     $post_model=new TripComment();
     $post_model->user_id=$request->user_id;
     $post_model->trip_id=$request->trip_id;
     $post_model->post=$request->post;

     $post_model->created_at=time();
     $post_model->updated_at=time();
     $post_model->save();
       return
       redirect()
         ->back()
         ->with('success', 'Comment Has been Created successfully!');
    }
    public function store_reply(Request $request)
    {
      $request->validate([
          'post_name' => 'required',

      ]);

     $post_model=new TripCommentReply();
     $post_model->user_id=$request->user_id;
     $post_model->trip_id=$request->trip_id;
     $post_model->trip_comment_id=$request->trip_comment_id;
     $post_model->post=$request->post_name;

     $post_model->created_at=time();
     $post_model->updated_at=time();
     $post_model->save();
       return
       redirect()
         ->back()
         ->with('success', 'reply Has been Created successfully!');
    }







    public function createtrip()
    {
      $data['destinations'] = DB::table('destinations')->get();
      // $data['destinations'] =\App\Destination::orderBy('created_at', 'desc')->paginate(10)->OnEachSide(5);
      return view('front.pages.trip.createtrip',['data'=>$data]);
    }







    public function autocomplete(Request $request)
     {
        $query = $request->get('term','');
        echo $data=District::where('full_name','LIKE','%'.$query.'%')->get();
        return response()->json($data);

       // echo $data = District::select("full_name")
       //         ->where("full_name","LIKE","%{$request->input('query')}%")
       //         ->get();
       //
       //  return response()->json($data);

   }

}
