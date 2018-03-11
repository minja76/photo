@extends('layouts.app')
@section('content')

<h3>Upload Photo</h3>

{!! Form::open(['action' => 'PhotosController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'file'=>true]) !!}
{{Form::hidden('album_id', $album_id)}}
{{Form::file('files[]', ['multiple'=>'multiple'])}}
{{Form::submit('submit')}}
{!! Form::close() !!}

<input type="file" name="photo[]" multiple>

@endsection('content')