@extends('layouts.master')

@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h4>View Pets</h4><a href="{{url('pets/create')}}"  class="btn-group btn-group-xs btn-default btn pull-right">Add New Pet</a></div>
    @if($pets)
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
        Services Available
        </th>
          <th>
          Action
          </th>        
        </tr>
      </thead>
    <tbody>
    @foreach($pets as $pet)
    <tr>
    <td>
        {{$pet->id}}
        </td>
        <td>
        {{$pet->name}}
        </td>
        <td>
        {{{ count($pet->petServices) ? implode(",",array_values(array_flatten($pet->petServices->toArray()))) : 'No Service Available' }}}
        </td>
        <td>
        <a href="{{url('pets/'.$pet->id)}}"  class="delete btn-group btn-group-xs btn-danger btn">delete</a>
        </td>
    </tr>
    @endforeach
        </tbody>
  </table>
    @else
    <p> No Pets Available</p>
    @endif
</div>
@stop