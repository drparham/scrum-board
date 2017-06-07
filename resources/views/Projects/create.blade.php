@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create {{$name}} Project</div>
                    <div class="panel-body">
                        <div class="panel-content">
                            {!! $form !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <formbuilder-create-project v-bind:project-type='{{$type}}' v-bind:project-id='{{$id}}'></formbuilder-create-project>
@endsection
