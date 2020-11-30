<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //
    //
    public function index()
    {
        $todos=Todo::all()->where('completed',0);
        return view('todo')->with('todos',$todos);
    }
    public function show($todoId)
    {
        // dd($todoId);
        $todo=Todo::find($todoId);
        return view('show')->with('todo',$todo);
    }
    public function create()
    {
        return view('create');
    }
    public function edit($id)
    {
        //dd(request()->all());
        $todo=Todo::find($id);
        return view('edit')->with('todo',$todo);
    }
    public function delete($id)
    {
        $todo=Todo::find($id);
        $todo->delete();
        session()->flash('success','To do Deleted successfully');
        return  redirect('Todo');  
    }

public function complete($id)
    {
        $todo=Todo::find($id);
        $todo->completed=1;
        $todo->update(); 
        session()->flash('success','To do Completed successfully');
        return  redirect('Todo');
   
    }
    
    public function update($id)
    {
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);
        $data=request()->all();
        $todo =Todo::find($id);
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->completed=0;
        $todo->update();
        
        session()->flash('success','To do Updated successfully');
        return  redirect('Todo');
   
    }
    public function store()
    {
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);

        $data=request()->all();
        $todo =new Todo();
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->completed=0;
        $todo->save();
        session()->flash('success','To do Created successfully');
        return  redirect('Todo');
    }
}

