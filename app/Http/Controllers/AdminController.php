<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function userDetails(){
        if($this->is_admin_login_check() != null){
            $active_list = 'active';
            $user_info = UserCardInformation::whereIn('status',[1,2])->get()->all();
            $main_content = view('admin.user_details',compact('user_info'));
            return view('admin.master',compact('main_content','active_list'));
        }else{
            return redirect('/admin');
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
