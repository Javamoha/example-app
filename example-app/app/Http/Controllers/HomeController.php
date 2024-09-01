<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.about');
    }
    public function index1()
    {
        $medii = Medicine::get();
        return view('user/home', compact('medii'));
    }
    public function index2()
    {
        return view('user.login');
    }
    public function index3()
    {
        return view('user.register');
    }
    public function index4()
    {
        $medii = Medicine::get();
        return view('user.showallhealth', compact('medii'));
    }
    public function index5()
    {
        $medii = Medicine::get();
        return view('user.deatilsmedicine', compact('medii'));
    }
    // public function showonlymedii($id){
//     $medi= Medicine::findOrFail($id);


    //     return  view('user.health',compact('medii'));

    //   }
    public function index6()
    {

        return view('user.edit_profile');
    }
    public function index7()
    {
        $posts = Post::get();
        return view('user.news', compact('posts'));
    }
    public function index8()
    {
        $user = User::get();

        return view('user.profile');
    }
    public function index9()
    {
        $user = User::get();
        $meds= Medicine::get();

        return view('user.cntact',compact('meds'));
    }
    public function index10()
    {
        $medii = Medicine::get();
        return view('user.buy', compact('medii'));
    }
    public function index11()
    {
        
        return view('user.error');
    }
}