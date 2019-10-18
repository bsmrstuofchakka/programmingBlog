<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }


    public function listSettings(){

        $data['settings'] = Settings::all();
        return view('admin.set.settingsList', $data);
    }

    public function addSettings(){
        return view('admin.set.settingsAdd');
    }

    public function saveSettings(Request $request){

        $data = new Settings();

   //     if(isset($request->id)&& !empty($request->id))
     //       $data=Blog::find($request->id);

        if(isset($request->id)&& !empty($request->id))
            $data = Settings::find($request->id);

        $data->email =$request->email;
        $data->phone =$request->phone;
        $data->save();
        return redirect('settings');
    }
    public function deleteSettings(Request $request){

        Settings::find($request->id)->delete();
        return redirect()->back();

    }
    public function editSettings(Request $request){
        $data['settings'] = Settings::find($request->id);
        return view('admin.set.settingsAdd', $data);
    }




}
