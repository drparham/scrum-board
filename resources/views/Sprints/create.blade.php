@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Sprint</div>
                    <div class="panel-body">
                        <div class="panel-content">
                            {!! FormBuilder::buildForm('Sprint', 'POST', 'storeSprint', 'create', null, null) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <formbuilder-create-sprint v-bind:project-id='{{$id}}'></formbuilder-create-sprint>

@endsection
