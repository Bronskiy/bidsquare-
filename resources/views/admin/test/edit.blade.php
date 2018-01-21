@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($test, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.test.update', $test->id))) !!}

<div class="form-group">
    {!! Form::label('photo_field_test', 'Photo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('photo_field_test') !!}
        {!! Form::hidden('photo_field_test_w', 4096) !!}
        {!! Form::hidden('photo_field_test_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('file_field_test', 'File', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('file_field_test') !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('long_no_ck_test', 'No CK', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('long_no_ck_test', old('long_no_ck_test',$test->long_no_ck_test), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('long_ck_test', 'With CK', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('long_ck_test', old('long_ck_test',$test->long_ck_test), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.test.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection