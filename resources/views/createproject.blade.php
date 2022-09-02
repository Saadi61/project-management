@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('status'))

        <div class="alert alert-success">{{ session('status') }}</div>

    @endif

    @if ($errors->any())
        <div class="alert alert-danger">

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach



        </div>
    @endif



        <form action="{{route('store')}}" method="POST">
        @csrf

    <h4> Enter Project Name</h4>

    <input type="text" placeholder="Project Name" name="project_name" >
    <br> <br> <br>
        <button type="submit" class="btn btn-primary">Create Project</button>


    </form>
<h3 class="mt-4">Projects</h3>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
    </tr>
    </thead>
    <tbody>
        @foreach($projects as $key => $project)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$project->project_name}}</td>
                <td><a href="{{route('invite_view',$project)}}"    class="btn btn-success float-right ">Invite User</a></td>
                <td><a href="{{ route('createtask',$project) }}" class="btn btn-primary float-end">Create Task</a></td>

            </tr>

        @endforeach

    </tbody>
</table>
</div>

@endsection
