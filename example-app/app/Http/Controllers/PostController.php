<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function AddPosts(Request $request){

   $data = new Post;
      
      if ($request->hasFile('post_image')) {
          $image = $request->file('post_image');
          $imageName = time().'.'.$image->getClientOriginalExtension();
          $image->move('Postimage', $imageName);
          $data->post_image = $imageName;
      }
      
      $data->text = $request->text;
      
      $data->save();
      
      return redirect()->back()->with('message','successfly');
  }
}
