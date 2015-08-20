@extends('layouts.master')

@section('content')

{{ Form::open(array('url' => 'pets')) }}

{{ Form::close() }}
@endsection