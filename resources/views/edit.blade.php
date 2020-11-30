@extends('layouts.app')
@section('title')
Create TOdo
@endsection
@section('content')
<h1 class="text-center my-5">TODo</h1> <br />
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">

                    <div class="card-header">EDIT Todo</div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item">

                            {{$error}}
                            </li>
                            @endforeach
                        </div>
                        @endif
                <form method="POST" action="/update/{{$todo->id}}" >
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="name" name="name" value="{{$todo->name}}">
                </div>      
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="description" >{{$todo->description}}</textarea>
                </div>
                <div class="form-gropup text-center">
                <button class="btn btn-success">Update Todo</button>
                </div>
                </form>
            </div>
                </div>

            </div>
        </div>
    
@endsection