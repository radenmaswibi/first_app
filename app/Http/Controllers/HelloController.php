<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class HelloController extends Controller
{
    public function index(){

        $data = Activity::get();

        return view('coba.hello')
        ->with('data',$data);
    }

    public function getAbout(){
        return view('coba.about');
    }

    public function indexActivity(){
        return view('coba.activity');
    }

    public function storeActivity(Request $request){
        $request->validate([
            'name_activity' => 'required'
        ]);

        //dd($request->all());

        Activity::create($request->all());

        return redirect()->route('index')
        ->with('success','Selamat Activity Berhasil Dibuat');

        

    }

    public function indexEditActivity($id){
        $datas = Activity::where('id',$id)->first();
        return view('coba.edit-data')
        ->with('datas', $datas);
    }

    public function updateActivity(Request $request, $id){
        Activity::where('id', $id)->update([
            'name_activity' => $request->name_activity,
        ]);

        return redirect(route('index'))
        ->with('success','Update Activity Berhasil Dibuat');
    }

    public function deleteActivity($id) {
        Activity::where('id',$id)->delete();
        return redirect(route('index'));
    }
}
