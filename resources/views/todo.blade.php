@extends('layouts.app')
@section('title')
TODO List 
@endsection
@section('content')
        <h1 class="text-center my-5">TODo</h1> <br />
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">

                    <div class="card-header">Todo</div>
                    <div class="card-body">


                        <ul class="list-group">
                            @foreach($todos as $todo)
                            <li class="list-group-item">{{$todo->name}}
                            <a href="/complete/{{$todo->id}}" class="btn btn-warning btn-sm mr-2  float-right">Complete</a>
 
                            <a href="/Todo/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2" >View</a>
         

                            </li>
                            
                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    
@endsection