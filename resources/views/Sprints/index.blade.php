@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/organization/{{$sprint->project->projectable->id}}">{{$sprint->project->projectable->name}}</a></li>
                    <li><a href="/project/{{$sprint->project->id}}">{{$sprint->project->name}}</a></li>
                    <li class="active">{{$sprint->name}}</li>
                </ol>
                <div class="panel panel-default">
                    <div class="panel-heading text-right"><a href="/api/v1/column/create/{{$sprint->id}}" title="Add Columns"><span class="glyphicon glyphicon-signal" aria-hidden="true" ></span></a> | <a href="/api/v1/story/create/{{$sprint->id}}" title="Add User Story"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>User Story</th>
                                        @foreach($sprint->columns as $column)
                                            <th>{{$column->name}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sprint->rows as $row)
                                        <tr>
                                            <th>
                                                @foreach($sprint->userStories as $story)
                                                    @if($story->sprint_row_id == $row->id)
                                                        {{$story->name}}
                                                    @endif
                                                @endforeach
                                            </th>



                                            @foreach($sprint->columns as $column)
                                                <th class="active col-md-2">
                                                    <div class="column" style="height:30em; overflow:auto;">
                                                        @foreach($sprint->userStories as $story)
                                                        @if($story->sprint_row_id == $row->id)
                                                                <p class="text-right"><a href="/api/v1/task/create/{{$sprint->id}}/{{$column->id}}/{{$story->id}}" title="Add Task"><span class="glyphicon glyphicon-plus"></span></a></p>
                                                            @foreach($story->tasks as $task)
                                                                    @if($task->sprint_column_id == $column->id)
                                                                        <div class="panel panel-default task-card">
                                                                            <div class="panel-heading task-title">
                                                                                <strong>{{$task->title}}</strong>
                                                                            </div>
                                                                            <div class="panel-body task-body">
                                                                                {{substr($task->details,0,120).'...'}}
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </th>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
