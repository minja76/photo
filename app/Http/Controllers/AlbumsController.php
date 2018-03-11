<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Album;


class AlbumsController extends Controller
{
    //
  public function index(){

    $albums=Album::all();

    return view('albums.index')->withAlbums($albums);
  }

  public function create(){
    
        return view('albums.create');
      }
    

      public function store(Request $request){
        $this->validate($request, [

            'name'=>'required', 
            'cover_image'=>'image|max:1999'
        ]);


        $filenameWithExtention=$request->file('cover_image')->getClientOriginalName();
        $filename=pathinfo($filenameWithExtention, PATHINFO_FILENAME);
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        $path=$request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore); 
        

        $album=new Album;

        $album->name=$request->name;

        $album->cover_image=$fileNameToStore;


         $album->save();

         return redirect('/albums')->with('success', 'Album je unet');

     }

     public function show($id){

          $album=Album::find($id);
          return view('albums.show')->withAlbum($album);
        }

}
