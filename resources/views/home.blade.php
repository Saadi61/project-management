@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))

        <div class="alert alert-success">{{ session('status') }}</div>

    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <br>
                        <form>
                       <a href="{{route('createproject')}}" class="btn btn-primary">Create Project</a>

                        </form>
                </div>
            </div>


        </div>

    </div>
</div>


@endsection
