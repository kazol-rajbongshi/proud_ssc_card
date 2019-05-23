<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use App\Admin;
use App\UserCardInformation;;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function is_admin_login_check(){

        $admin_id = Session::get('current_admin_id');
        return $admin_id;
    }

    public function adminLogin(){

        return view('admin.admin_login');

    }

    public function adminLogout(){

        Session::put('current_admin_id','');
        Session::put('current_admin_name','');
        return redirect('/admin');
    }

    public function adminLoginCheck(Request $request){

        $email = $request->email;
        $password = md5($request->password);

        $info = Admin::where([['email','=',$email],['password','=',$password]])->first();

        if(isset($info)){
            Session::put('current_admin_id',$info->id);
            Session::put('current_admin_name',$info->name);
            // return 'dashboard';
            return redirect('/pending-users');
        }else{
            return redirect('/admin')->with('login_err','Email or Password invalid');
        }

    }

    public function pendingUsers(){

        if($this->is_admin_login_check() != null){
            $active_pending_list = 'active';
            $user_info = UserCardInformation::where('status',0)->get()->all();
            $main_content = view('admin.pending_list',compact('user_info'));
            return view('admin.master',compact('main_content','active_pending_list'));
        }else{
            return redirect('/admin');
        }
    }

    public function activeUsers(){

        if($this->is_admin_login_check() != null){
            $active_list = 'active';
            $user_info = UserCardInformation::whereIn('status',[1,2])->get()->all();
            $main_content = view('admin.active_list',compact('user_info'));
            return view('admin.master',compact('main_content','active_list'));
        }else{
            return redirect('/admin');
        }
    }
    public function userDetails($id){
        if($this->is_admin_login_check() != null){
            $active_list = 'active';
            $user_info = UserCardInformation::findOrFail($id);
            $main_content = view('admin.user_details',compact('user_info','id'));
            return view('admin.master',compact('main_content','active_list'));
        }else{
            return redirect('/admin');
        }
    }

    public function saveExtraInfoAdmin(Request $request){
        if ($this->is_admin_login_check() != null) {
            $user_id = Session::get('current_admin_id');
            $active_list = 'active';
            $user_info = UserCardInformation::findOrFail($request->user_id);
            $user_info->card_number = $request->card_number;
            $user_info->validity_period = $request->validity_period;
            $user_info->status = 1;
            $user_info->save();
            return redirect('/pending-users')->with('extra_info_msg','User information updated successfully.');
        }else{
            return redirect('/');
        }
    }

    public function changeUserStatus(Request $request){
        if($this->is_admin_login_check() != null){
            $id = $request->id;
            // return response()->json(['data'=>$id]);
            $c_info = UserCardInformation::findOrFail($id);
            if($c_info->status == 1){
                UserCardInformation::where('id',$id)->update(array('status' => 2));
            }elseif ($c_info->status == 2) {
                UserCardInformation::where('id',$id)->update(array('status' => 1));
            }
            
            $user_info = UserCardInformation::whereIn('status',[1,2])->get()->all();
            // return redirect('/all-company-list')->with('suspend_msg','Company suspend successfully.');
            return view('admin.ajax_active_list',compact('user_info'));
        }else{
            return response()->json(['data' => 2]);
        }
        
    }


    public function RequestForm()
    {
//        return view('admin.request_form');

        if($this->is_admin_login_check() != null){
            $active_list = 'active';
            $main_content = view('admin.request_form');
            return view('admin.master',compact('main_content','active_list'));
        }else{
            return redirect('/admin');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveRequestInformation(request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'ssc_roll' => 'required',
            'ssc_registartion' => 'required',
            'ssc_board' => 'required',
            'address' => 'required',
            'photo' => 'image|mimes:jpg,jpeg,png,svg',
            'facebook_name' => 'required',
            'facebook_email' => 'required'
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
            array('name' => $request->name, 'ssc_roll' => $request->ssc_roll, 'ssc_registartion' => $request->ssc_registartion, 'ssc_board' => $request->ssc_board,'address' => $request->address, 'photo' => $imageName, 'facebook_name' => $request->facebook_name, 'facebook_email' => $request->facebook_email, 'created_at' => $current_time, 'updated_at' => $update_time)
        );

        $flag = UserCardInformation::insert($data);
        return redirect('request-form')->with('card_add_success','Card request send successfully !');
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
