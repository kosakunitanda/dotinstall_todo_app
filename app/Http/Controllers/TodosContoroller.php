<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Todo;


class TodosContoroller extends Controller
{
    //
    public function getAll(){

        
       $todos = Todo::all();
       return view('todos.index')->with('todos', $todos);
       
    }
}
