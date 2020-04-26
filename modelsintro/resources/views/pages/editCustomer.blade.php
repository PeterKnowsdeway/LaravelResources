@extends('layout.app')

@section('content')
    <h1> A Customer</h1>

    {!! Form::open(['url' => '/customers', 'method' => 'get'])!!}

    {!! Form::close() !!}
@endsection

@section('content')

        <h1> A Customer </h1>

        {!! Form::open(['url'=> '/customers', 'method'=> 'get'])!!}

        <div class ="form-group">
            {{ Form::label('firstName', 'First Name', ['class' => 'control-label'])}}
            {{ Form::text('firstName', $cust->firstName, ['class'=>'form-control'])}}
        </div>
        <div class ="form-group">
                {{ Form::label('lastName', 'Last Name', ['class' => 'control-label'])}}
                {{ Form::text('lastName', $cust->lastName, ['class'=>'form-control'])}}
            </div>
        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}


        {!! Form::close() !!}
@endsection