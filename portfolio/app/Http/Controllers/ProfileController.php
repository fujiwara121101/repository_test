<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Prefecture;
use App\Manner;
use Storage;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Profile $profile, Manner $manner)
    {
        return $profile->get();
        //Mannersテーブル
        return view('manners/index')->with(['title' => $title->get()]); 
    }

    public function create(Prefecture $prefecture, Request $request)
    {
        //もともと
        return view('profiles/create')->with(['prefectures' => $prefecture->get()]);
    }
    
    //新規
     public function add()
    {
      return view('profiles/create');
    }
    
    //保存(途中)
    public function store(Request $request, Profile $profile, Prefecture $prefecture)
    {
        $input = $request['profile'];
        $input += ['user_id' => $request->user()->id]; 
        
                //s3アップロード開始
        $image = $request->file('icon');
        // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('profile', $image, 'public');
        // アップロードした画像のフルパスを取得
        $profile->icon = Storage::disk('s3')->url($path);
        $profile->fill($input)->save();
        
        return view('profiles/show')->with(['profile' => $profile, 'prefectures' => $prefecture->get()]);
        
        
    }
    
    //プロフィール詳細表示
    public function show(Profile $profile, Prefecture $prefecture)
    {
        return view('profiles/show')->with(['profile' => $profile, 'prefectures' => $prefecture->get()]);
    }   
    
    
    public function search(Request $request, Prefecture $prefecture)
    {
        
 
        $input = $request['profile'];
        
        if(empty($input)){
          return view('profiles/search')->with(['prefectures' => $prefecture->get()]);
        }
        else{
          $profiles = Profile::where('sex',$input["sex"])->where('prefecture_id' ,$input["prefecture_id"])->get();
          
          return view('profiles/search')->with(['profiles' => $profiles, 'prefectures' =>$prefecture->get()]);
        }
        
    //return view('profiles/search')->with(['prefectures' => $prefecture->get()]);
        
    }
    
}
