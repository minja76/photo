@extends('layouts.app')
@section('content')



{!! Form::open(['action' => 'AlbumsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
{{Form::label('name', 'Name')}}
{{Form::text('name', '', ['placeholder'=>'Album name'])}}
{{Form::file('cover_image')}}
{{Form::submit('submit')}}
{!! Form::close() !!}



@endsection('content')