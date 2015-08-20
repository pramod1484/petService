@extends('layouts.master')

@section('content')
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">  <h4>View Services</h4> <a href="{{url('services/create')}}"  class="btn-group btn-group-xs btn-default btn pull-right">Add New Service</a></div>
    @if($services)
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Name
                </th>
                <th>
                    Serviceable Pets
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>
                    {{$service->id}}
                </td>
                <td>
                    {{$service->name}}
                </td>
                <td>
                    {{{ count($service->serviciablePets) ? implode(",",array_values(array_flatten($service->serviciablePets->toArray()))) : 'No Service Available' }}}
                </td>
                <td>
                    <a href="{{url('services/'.$service->id)}}"  class="delete btn-group btn-group-xs btn-danger btn">delete</a>
                    <a href="{{url('services/'.$service->id.'/edit')}}"  class="btn-group btn-group-xs btn-primary btn">edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p> No Services Available</p>
    @endif
</div>
@stop