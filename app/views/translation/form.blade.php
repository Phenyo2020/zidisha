@extends('layouts.master')

@section('content')
<div class="row">
    <a href=" {{ route('admin:translation:index') }} ">Translation Index</a>
    <br/>
    <a href="#" id="toggle-label">Toggle Labels</a>
</div>

<div class="row">
    <div class="col-md-10">
        {{ BootstrapForm::open() }}
        {{ BootstrapForm::model($defaultValues) }}

        @include('translation.form-section',['labels' => $fileLabels, 'level' => 2, 'group' => '', 'title' => $filename])

        {{ BootstrapForm::submit('Save') }}
        {{ BootstrapForm::close() }}
    </div>

    <div class="col-md-2">
        <nav>
            @include('translation.form-menu', ['labels' => $fileLabels, 'group' => $filename])
        </nav>
    </div>
</div>
@stop

@section('script-footer')
<script>
    $("#toggle-label").click(function() {
        $( "label" ).toggle();
    });
</script>
@stop
