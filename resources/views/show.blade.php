@extends('layouts.app')
@section('title')
{{$todo->name}}
@endsection
@section('content')
<div class="row justify-content-center">
        <div class="col-md-6">
          <div class="container">
              <form method="get" action="/edit/{{$todo->id}}">
                @csrf
                <h1 class="text-center my-5">{{$todo->name}}</h1>
                <input type="hidden" name="name" value="{{$todo->name}}">
                <div class="card card-default">
                    <div class="card-header">
                        Details
                    </div>
                    <div class="card-body">
                        {{$todo->description}}
                        <input type="hidden" name="description" value="{{$todo->description}}">
                        
                    </div>
                </div>     
                <a href="/edit/{{$todo->id}}" class="btn btn-info btn-sm my-2">Edit</a>
                <a href="/delete/{{$todo->id}}" class="btn btn-danger btn-sm my-2">delete</a>     
            </div>
            </form>
        </div>
    </div>
@endsection