@extends('layouts.app')

@include('layouts.breadcrumbs')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (!$organizations->isEmpty())
                <div class="panel panel-default">
                    <div class="panel-heading">Organizations <a href="/api/v1/org/create">+</a></div>
                    <div class="panel-body">
                        @foreach($organizations as $organization)
                            <div class="panel-content">
                                <a href="/organization/{{$organization->id}}">{{$organization->name}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="panel panel-default">
                    <div class="panel-heading">Organizations </div>
                    <div class="panel-body">
                        <div class="panel-content">
                            You do not belong to any organizations, would you like to <a href="/api/v1/org/create">create</a> one?
                        </div>
                    </div>
                </div>
            @endif

            @if (!$projects->isEmpty())
                <div class="panel panel-default">
                    <div class="panel-heading">User Projects <a href="/api/v1/project/create/1/{{Auth::id()}}">+</a></div>
                    <div class="panel-body">
                        @foreach($projects as $project)
                            <div class="panel-content">
                                <a href="/project/{{$project->id}}">{{$project->name}}</a>
                                {{$project->description}}
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="panel panel-default">
                    <div class="panel-heading">User Projects</div>
                    <div class="panel-body">
                        <div class="panel-content">
                            You have no projects, would you like to <a href="/api/v1/project/create/1/{{Auth::id()}}">create</a> one?
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
