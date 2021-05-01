<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){
        return 'ahmed';
    }
    /*
    public function _construct()
    {
        $this ->middleware('auth')->except(show);
    }


public function index(){
       // $data=[];
       // $data['id']=5;
       // $data['name']='aa';
        $a=['ahmed','mohammed'];
    return view('welcome',compact('a'));
}
public function b()
{
    return view('about');
}
    */

}
