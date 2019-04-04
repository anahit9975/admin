<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
	public function __construct()
            {
                $this->middleware('auth');
            }


     public function  index(){
        return view('/photo');

    }

    public  function  upload(Request $request){
        $this->validate($request, ['select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048']);
        $image = $request->file('select_file');
        $imgName = $request->file('select_file')->getClientOriginalExtension();
       	$imgSize =   $request->file('select_file')->getClientSize();
        
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/img'), $new_name);
        $imgPath = "/img"."/".$new_name;
        $img = new Image();
        
        $img->name = $new_name;
        $img->path = $imgPath;
        $img->size = $imgSize ;
        $img->save();
        return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);

	}
}
