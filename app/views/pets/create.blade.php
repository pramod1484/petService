@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-offset-2 col-md-8">
        <div class="record">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><h4>View Pets</h4></div>
                {{ Form::open(array('url' => 'pets','id' => "formAdd", 'name' => "formAdd")) }}
                <div class="form-group @if($errors->has('name')) {{'has-error'}} @endif">
                    {{Form::label('name', 'Pet Name');}}
                    {{ Form::text('name','',array('class' => 'form-control','placeholder'=>'Pet name'))}}
                    @if ($errors->has('name'))
                    <span for="name" class="has-error">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2">
                        {{ Form::submit('Save', array('class' => 'btn btn-primary', 'data-action'=>'save', 'name'=>'save')) }}

                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    @endsection