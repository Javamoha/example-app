<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserReqest;

class UserController extends Controller
{
    public function register1(UserReqest $request) 
    {
        
        if ($request->validated()) {
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $user = User::create($input);
            $accessToken = $user->createToken('authToken')->accessToken;
            
            // تعريف المصادقة باستخدام بيانات المستخدم الجديد
            if (Auth::attempt(['number' => $input['number'], 'password' => $input['password']])) {
                $user = Auth::user();
            
                if ($user->profile_image === 'default.jpg') {
                    $user->profile_image = 'images/default.jpg';
                    $user->save();
                }
            }
        
            return redirect('/');
                           
        } 
        else {
            return redirect('/')->withErrors("Validation failed");
        }
    }
public function login1(Request $request)
{
    $credentials = $request->only('number', 'password');
    
    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        return redirect('/');
    } else {
        return back()->withErrors("number or password fail");
    }
}
public function logout( Request $request,$id =null) {
    Auth::logout(); 
    User::findOrFail($id); 

    $request->session()->invalidate();

    return redirect('/');
}
public function show_profile(){
   
    return view('user.edit_profile');
}

// public function update(Request $request, $id)
// {
//     $user = User::find($id);
//     $user->name = $request->input('name');
//     $user->email = $request->input('last_name');
//     $user->email = $request->input('age');
//     $user->email = $request->input('address');
//     $user->email = $request->input('type');
//     if ($request->hasFile('profile_image')) {
//         $image = $request->file('profile_image');
//         $imageName = time() . '.' . $image->getClientOriginalExtension();
//         $image->move(public_path('images'), $imageName);
//         $user->profile_image = $imageName;
//     }
    
//     $user->save();
    
//     return redirect()->route('user.profile.profile', $user->id)->with('success', 'User updated successfully');
// }

public function update_image(Request $request , $id){
    $validated = $request->validate([
        'image' => 'nullable',
        'address' => 'nullable',
        'age' => 'nullable',
        'facebook' => 'nullable',
        'linkedin' => 'nullable',
        'twitter' => 'nullable',
        'last_name' => 'nullable',
        
    ]);

    $data = User::find($id);
   
      
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move('images', $imageName);
        $data->image = $imageName;
        $data->address=$request->address;
        $data->age=$request->age;
        $data->facebook=$request->facebook;
        $data->linkedin=$request->facebook;
        $data->twitter=$request->twitter;
        $data->last_name=$request->last_name;
        $data->university=$request->university;
        $data->type=$request->type;


        $data->save();

    }
    return back();
}
public function update_information(Request $request , $id){
    $data = User::find($id);
    
    $data->save();
      
   

   
    return view('user.profile');
}
}
