@extends('app')



@section('content')

<h1>Write Article</h1>

{!! Form::open(['url' => 'article']) !!}


<div class="form-group">
{!! Form::label('Title','Name:') !!}
{!! Form::text('title' , null, ['class' => 'form-controll', 'foo' => 'bar']) !!}

</div>


<div class="form-group">
{!! Form::label('body','Body:') !!}
{!! Form::textarea('body' , null, ['class' => 'form-controll', ]) !!}

</div>


<div class="form-group">
{!! Form::label('piblished_at','Published At:') !!}
{!! Form::input('date', 'piblished_at' , null, ['class' => 'form-controll',]) !!}

</div>




<div class="form-group">

{!! Form::submit('Add Article' , ['class' => 'btn btn-primary form-controll', 'foo' => 'bar']) !!}

</div>



{!! Form::close() !!}


@stop
