@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-offset-2 col-md-8">
        <div class="record">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><h4>Add Service</h4></div>
                {{ Form::open(array('url' => 'services','id' => "formAdd", 'name' => "formAdd")) }}
                @include('services.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection