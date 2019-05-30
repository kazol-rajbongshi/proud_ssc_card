<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
use App\UserCardInformation;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cardRequestForm(){
        return view('home_page.card_request_form');
    }

    public function saveCardRequestInformation(request $request){

        $this->validate($request, [

            'name' => 'required',
            'ssc_roll' => 'required|unique:user_information',
            'ssc_registartion' => 'required|unique:user_information',
            'ssc_board' => 'required',
            'address' => 'required',
            'photo' => 'image|mimes:jpg,jpeg,png,svg',
            'facebook_contact' => 'required',
            'contact' => 'required'

        ]);

        

        $imageName = NULL;
        if (Input::hasFile('photo')) {
            $file = Input::file('photo');
            $file_path_name = rand(1, 10000000) . $file->getClientOriginalName();
            $image = str_replace(' ', '+', $file_path_name);
            $imageName = str_random(10).'.'.'png';
            // return $imageName;
            // exit();
            $file->move('uploads/', $imageName);
        }
        // $info = Album::create($request->all());

        $current_time = Carbon::now()->addHour(6);
        $update_time = Carbon::now()->addHour(6);

        $data = array(
            array('name' => $request->name, 'ssc_roll' => $request->ssc_roll, 'ssc_registartion' => $request->ssc_registartion, 'ssc_board' => $request->ssc_board,'address' => $request->address, 'photo' => $imageName, 'facebook_contact' => $request->facebook_contact, 'contact' => $request->contact,'foreign_friend' => $request->foreign_friend, 'created_at' => $current_time, 'updated_at' => $update_time)
        );

        $flag = UserCardInformation::insert($data);
        return redirect('card-request-form')->with('card_add_success','Card request send successfully !');
    }

    public function searchUser(Request $request){
        
        $card_number = DB::table('user_information')->where([['card_number',$request->search_card],['status',1]])->first();
        // echo "<pre>";
        // print_r($card_number);
        // exit();
        if(isset($card_number)){
            return redirect('/')->with('card_found_msg','User is active and verified');
        }else{
            return redirect('/')->with('card_notfound_msg','User is inactive and is not verified');
        }      
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
