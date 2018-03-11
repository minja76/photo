@extends('layouts.app')
@section('content')
<h1>Albums</h1>
<style>
img {
    border: 2px solid #000;
    border-radius: 10px;
    padding: 0px;
    width: 150px;
}
</style>
<a class="button secondary" href="/albums">Go back</a>
<a class="button secondary" href="/photos/create/{{$album->id}}">Upload photos</a>
<a class="button secondary" href="/photos/create_multiple/{{$album->id}}">Upload multiple photos</a>


<div class="row">
        <h2>{{$album->name}}</h2>
        <br>
        <br>
        </div>

<div class="row">


        @foreach ($album->photos as $photo)
        <div class="row">
        <img src="/storage/photos/{{$album->id}}/{{$photo->photo}}"></a>
        <br>
        <br>
        </div>
        
     
        
        @endforeach
        

<br>
<br>
</div>




@endsection