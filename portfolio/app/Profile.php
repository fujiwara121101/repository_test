<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    'nickname',
    'sex',
    'prefecture_id',
    //user_id保存
    'user_id',
    ];
    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    //prefectureとのリレーション
    public function prefecture()
    {
       return $this->belongsTo('App\Prefecture');
    }      
    
    }

