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
    public  function  upload(Request $request,Image $images){

        $image = $request->file('select_file');
        $imgName = $request->file('select_file')->getClientOriginalName();
       	$imgSize =   $request->file('select_file')->getClientSize();

        $new_name = rand() .$imgName;
        $image->move(public_path('/img'), $new_name);
        $imgPath = "/img"."/".$new_name;
        $img = new Image();
        $img->name = $new_name;
        $img->path = $imgPath;
        $img->size = $imgSize ;
        $img->save();
        return redirect()->back();




	}
}
