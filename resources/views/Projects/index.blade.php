@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ol class="breadcrumb">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/organization/{{$project->projectable->id}}">{{$project->projectable->name}}</a></li>
                    <li class="active">{{$project->name}}</li>
                </ol>
                @if (!$project->sprints->isEmpty())
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$project->name}} Sprints <a href="/api/v1/sprint/create/{{$project->id}}">+</a></div>
                        <div class="panel-body">
                            @foreach($project->sprints as $sprint)
                                <div class="panel-content">
                                    <a href="/sprint/{{$sprint->id}}">{{$sprint->name}}</a>
                                    {{$sprint->description}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$project->name}} Sprints</div>
                        <div class="panel-body">
                            <div class="panel-content">
                                You have no Sprints, would you like to <a href="/api/v1/sprint/create/{{$project->id}}">create</a> one?
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
