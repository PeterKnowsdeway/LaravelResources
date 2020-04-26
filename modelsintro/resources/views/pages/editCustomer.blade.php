@extends('layout.app')

@section('content')
    <h1> A Customer</h1>

    {!! Form::open(['action' => ['CustomersController@update', $customer->custID], 'method' => 'put'])!!}

    {!! Form::close() !!}
@endsection

@section('content')

        <h1> A Customer </h1>

        {!! Form::open(['url'=> '/customers', 'method'=> 'get'])!!}

        <div class ="form-group">
            {{ Form::label('firstName', 'First Name', ['class' => 'control-label'])}}
            {{ Form::text('firstName', $customer->firstName, ['class'=>'form-control'])}}
        </div>

        <div class ="form-group">
                {{ Form::label('lastName', 'Last Name', ['class' => 'control-label'])}}
                {{ Form::text('lastName', $customer->lastName, ['class'=>'form-control'])}}
        </div>

        <div class ="form-group">
                {{ Form::label('address', 'Address', ['class' => 'control-label'])}}
                {{ Form::text('address', $customer->address, ['class'=>'form-control'])}}
        </div>
        <div class ="form-row">
            <div class = "form-group col-md-6">
                {{ Form::label('city', 'City', ['class' => 'control-label'])}}
                {{ Form::text('city', $customer->city, ['class'=>'form-control'])}}
            </div>

            <div class = "form-group col-md-4">
                {{ Form::label('state', 'State', ['class' => 'control-label'])}}
                {{ Form::text('state', $customer->state, ['class'=>'form-control'])}}
            </div>

            <div class = "form-group col-md-2">
                {{ Form::label('zip', 'Zip', ['class' => 'control-label'])}}
                {{ Form::text('zip', $customer->zip, ['class'=>'form-control'])}}
            </div>

            {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
         </div>


        {!! Form::close() !!}
@endsection