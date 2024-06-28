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


}
