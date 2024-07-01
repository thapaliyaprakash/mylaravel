<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    
public function index()
{

    return view('home.index');
}

public function home()
{

    return view('home');
}

public function add_post(Request $request)
{
$data = new Post;

$data->title = $request->title;

$data->description = $request->description;


$image = $request->image;
if($image)
{


    $imagename = time().'.'.$image->getClientOriginalExtension();

    $request->image->move('post',$imagename);

    $data->image = $imagename;

}





$data->save();

return redirect()->back();




}

public function view_post()
{
    $post = Post::all();

    return view('allpost',compact('post'));
}


public function edit_post($id)
{

    $data = Post::find($id);


return view('update_post' ,compact('data'));

}


public function update_post(Request $request,$id)

{

    $post = Post::find($id);

    $post->title = $request->title;

    $post->description = $request->description;

    $image = $request->image;

    if($image)
    {
        $imagename = time().'.'. $image->getClientOriginalExtension();

        $request->image->move('post',$imagename);

        $post->image = $imagename;
    }


    $post->save();

    return redirect('view_post');


}


public function delete_post($id)
{
    $data = Post::find($id);

    $data->delete();

    return redirect()->back();
}

}
