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

@foreach ($albums as $album)
<div class="row">
<a href="albums/{{$album->id}}"><img src="/storage/cover_images/{{$album->cover_image}}"></a>
<br>
<br>
</div>

<div class="row">
<h2>{{$album->name}}</h2>
<br>
<br>
</div>

@endforeach

@endsection