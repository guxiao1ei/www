<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Gregwar\Captcha\CaptchaBuilder; 
use App\Http\Requests;
use Session;  

class TwoController extends Controller
{
    //

    public function index()
    {
    	$res = DB::table('news')->orderBy('id','asc')->get();

        return view('home.ones.index',['res'=>$res]);
    }

    public function create()
    {
    	return view('home.ones.add',['title'=>'新闻的添加页面']);
    }

    public function store(Request $request)
    {
    	$request = $request->except('_token');
    	$data = DB::table('news')->insert($request);

    	if($data){
    		return redirect('/one');
    	}
    }

    //修改
    public function edit($id)
    {
        $res = DB::table('news')->where('id',$id)->first();

        return view('home.ones.edit',['res'=>$res]);
    }

    public function update(Request $req, $id)
    {
        $res = $req->except('_token','_method');

        $info = DB::table('news')->where('id',$id)->update($res);

        if($info){
            return redirect('/one');
        }
    }

    public function delete($id)
    {
        $res = DB::table('news')->where('id',$id)->delete();

        if ($res) {
             return redirect('/one');
        }
       
    }


    
}
