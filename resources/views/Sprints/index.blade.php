@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">{{$sprint->name}}  <a href="/api/v1/sprint/create/{{$sprint->id}}">Add Column</a> | <a href="/api/v1/sprint/create/{{$sprint->id}}">Add Row</a> | <a href="/api/v1/sprint/create/{{$sprint->id}}">Add Epic</a></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Epic</th>
                                        @foreach($sprint->columns as $column)
                                            <th>{{$column->name}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sprint->rows as $row)
                                        <tr>
                                            <th>
                                                @foreach($userStories as $story)
                                                    @if($story->sprint_row_id == $row)
                                                        {{$story->name}}
                                                    @endif
                                                @endforeach
                                            </th>
                                            @foreach($sprint->columns as $column)
                                                <th>

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
