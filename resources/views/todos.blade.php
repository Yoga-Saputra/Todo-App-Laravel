@extends('layout')
@section('content')
    <div class="row justify-content-center">
            <form action="/create/todo" method="POST">
                @csrf
                <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Create new todo" name="todo">
                        <button class="btn btn-info" type="submit">Submit</button>
                </div>  
            </form>
    </div>
    <br>
    @foreach ($todos as $todo)
        {{ $todo->todo }} 
        <a href="todos/delete/{{ $todo->id }}" class="btn btn-danger"> Delete </a> 
        <a href="todos/update/{{ $todo->id }}" class="btn btn-warning"> Edit </a> 
        @if(!$todo->completed)
            <a href="{{ route('task.completed',['id' => $todo->id]) }}" class="btn btn-success"> mark as Done! </a> 
        @else
            <span class="text-success">Task is Done </span>
        @endif
        <hr>
    @endforeach
@endsection
