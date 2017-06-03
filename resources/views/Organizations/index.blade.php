@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (!$organization->projects->isEmpty())
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$organization->name}} Projects</div>
                        <div class="panel-body">
                            @foreach($organization->projects as $project)
                                <div class="panel-content">
                                    <a href="#">{{$project->name}}</a>
                                    {{$project->description}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$organization->name}} Projects</div>
                        <div class="panel-body">
                            <div class="panel-content">
                                You have no projects, would you like to <a href="#">create</a> one?
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection