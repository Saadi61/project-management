@extends('layouts.app')

@section('content')
    <div class="container">


        @if ($errors->any())
            <div class="alert alert-danger">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </div>
        @endif
        <form action="{{route('storetask')}}" method="POST">
            @csrf
            <h4> Enter Task Name   </h4>
            <input type="hidden" name="project_id" value="{{$project->id}}">
            <input type="text" placeholder="Create Task" name="task_name" >
            <br> <br> <br>
            <button type="submit" class="btn btn-primary">Create Task</button>


        </form>

            <h3 class="mt-4">Taks to do</h3>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($project->tasks as $key => $task)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$task->task_name}}</td>

                    </tr>

                @endforeach

                </tbody>
            </table>

    </div>

@endsection
