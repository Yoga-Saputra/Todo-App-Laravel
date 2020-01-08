@extends('layout')
@section('content')
    <div class="row justify-content-center">
            <form action={{ url('todos/save') }}/{{ $todo->id }} method="POST">
                @csrf
                <div class="input-group mb-3">
                        <input type="text" class="form-control input-lg" placeholder="Create new todo" name="todo" value="{{ $todo->todo }}">
                        <button class="btn btn-info" type="submit">Update</button>
                </div>  
            </form>
    </div>
@endsection