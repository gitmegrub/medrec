@extends('layouts.master')

@section('content')

<h1>Patients</h1>
<p class="lead">Add new patient or <a href="{{ route('patients.index') }}" class="btn btn-info" role="button" >Go Back to List</a></p></p>
<hr>

@include('partials.alerts.errors')

{!! Form::open([
    'route' => 'patients.store'
]) !!}

<div class="form-group">
    {!! Form::label('firstname', 'First Name:', ['class' => 'control-label']) !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('lastname', 'Last Name:', ['class' => 'control-label']) !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('middlename', 'Middle Name:', ['class' => 'control-label']) !!}
    {!! Form::text('middlename', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nickname', 'Nickname:', ['class' => 'control-label']) !!}
    {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('gender', 'Gender:', ['class' => 'control-label']) !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('civilstatus', 'Civil Status:', ['class' => 'control-label']) !!}
    {!! Form::text('civilstatus', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('birthday', 'Birthday:', ['class' => 'control-label']) !!}
    <p>{{ Form::text('birthday', '', array('class' => 'form-control','placeholder' => 'MM/DD/YYYY','data-datepicker' => 'datepicker')) }}</p>
</div>

<div class="form-group">
    {!! Form::label('contactinfo', 'Contact Info:', ['class' => 'control-label']) !!}
    {!! Form::text('contactinfo', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop