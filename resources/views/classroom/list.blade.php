


@extends('adminlte::page')

@section('title', 'StudentBook')

@section('content_header')
    <h1>Classes</h1>
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-heading lead">List of all classes:</div>

                <div class="panel-body">
                  @foreach($classrooms as $classroom)
                    <h3>{{ $classroom->name }}</h3>
                    <p></p>
                    <p>
                        <a href="{{ route('classrooms.show', ['classroom' => $classroom]) }}" class="btn btn-info">View class</a>
                        <a href="{{ route('classrooms.edit', ['classroom' => $classroom]) }}" class="btn btn-primary">Edit class</a>
                    </p>
                    <hr>
                  @endforeach






                </div>
                <a href="{{ route('classrooms.create') }}" class="btn btn-primary">Add new class</a>


            </div>
        </div>
    </div>
</div>




@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
