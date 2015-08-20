<div class="form-group @if($errors->has('name')) {{'has-error'}} @endif">
    {{Form::label('name', 'Service Name');}}
    {{ Form::text('name',null,array('class' => 'form-control','placeholder'=>'Pet name'))}}
    @if ($errors->has('name'))
    <span for="name" class="has-error">{{ $errors->first('name') }}</span>
    @endif
</div>
<div class="form-group">

    @foreach($pets as $pet)
    {{Form::checkbox('pets[]', $pet->id,in_array($pet->name,array_flatten($service->serviciablePets->toArray())))}}
    {{Form::label($pet->id, $pet->name);}}
    @endforeach

</div>
<div class="form-group">
    <div class="col-sm-offset-2">
        {{ Form::submit('Save', array('class' => 'btn btn-primary', 'data-action'=>'save', 'name'=>'save')) }}

    </div>