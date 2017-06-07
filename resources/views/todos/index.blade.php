
@extends('layouts.app')

@section('cover')
@endsection

@section('content')

<div id="container">
    <h1>Todos</h1>
    <form action="">
        <input type="text" id="new_todo" placeholder="what needs to be done?"/>
    </form>
    
    <ul id="#todos">
        @if (count($todos) > 0)
            @foreach ($todos as $todo)
                
                <li id="too_<?= $todo->id ?>" data-id="<?= $todo->id ?>">
　　                 <input type="checkbox" class="update_todo" <?php if ($todo->state === 1) { echo 'checked'; } ?>>
                    <span  class="todo_title <?php if ($todo->state === '1') { echo 'done'; } ?>">{{ $todo->title }}</span>
                    <div class="delete_todo">x</div>
                </li>
            
            @endforeach
        @endif
        
    </ul>
    
    
</div>

<script src="{{ asset('js/todo.js') }}"></script>

@endsection


