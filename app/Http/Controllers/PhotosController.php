<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Album;
use App\Photo;

class PhotosController extends Controller
{
    //

    public function create($album_id)


    {
        return view('photos.create')->with('album_id', $album_id);

    }
    public function create_multiple($album_id)
    
    
        {
            return view('photos.create_multiple')->with('album_id', $album_id);
    
        }

    public function store(Request $request)
    
    
        {
    
            
                
                foreach($request->file('files') as $file){
                        $filenameWithExtention=$file->getClientOriginalName();
                        $filename=pathinfo($filenameWithExtention, PATHINFO_FILENAME);
                        $extension=$file->getClientOriginalExtension();
                        $fileNameToStore=$filename.'_'.time().'.'.$extension;
                        $path=$file->storeAs('public/photos/'.$request->album_id, $fileNameToStore); 
                        
                
                        $photo=new Photo;
                        $photo->album_id=$request->album_id;                                       
                        $photo->photo=$fileNameToStore;               
                        $photo->save();  
                        
                }
                        return redirect('/albums/'.$request->album_id)->with('success', 'Photo je unet');
                
                     }
                
    
    


   

        public function store1(Request $request){
        
            $this->validate($request, [
                
                            
                            'photo'=>'image|max:1999'
                        ]);
                
                foreach($request->photos as $photo){
                        $filenameWithExtention=$request->file('photo')->getClientOriginalName();
                        $filename=pathinfo($filenameWithExtention, PATHINFO_FILENAME);
                        $extension=$request->file('photo')->getClientOriginalExtension();
                        $fileNameToStore=$filename.'_'.time().'.'.$extension;
                        $path=$request->file('photo')->storeAs('public/photos/'.$request->album_id, $fileNameToStore); 
                        
                
                        $photo=new Photo;
                        $photo->album_id=$request->album_id;                                       
                        $photo->photo=$fileNameToStore;               
                        $photo->save();  
                        
                }
                        return redirect('/albums/'.$request->album_id)->with('success', 'Photo je unet');
                
        }

    
}
