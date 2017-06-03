@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Organization</div>
                    <div class="panel-body">
                        <div class="panel-content">
                            {!! FormBuilder::buildForm('Organization', 'POST', 'updateOrg', 'update', $id) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection