@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (!$project->sprints->isEmpty())
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$project->name}} Sprints</div>
                        <div class="panel-body">
                            @foreach($project->sprints as $sprint)
                                <div class="panel-content">
                                    <a href="#">{{$sprint->name}}</a>
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
                                You have no Sprints, would you like to <a href="#">create</a> one?
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
