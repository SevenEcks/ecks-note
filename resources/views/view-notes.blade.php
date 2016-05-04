<!-- Stored in resources/views/view-notes.blade.php -->

@extends('layouts.master')

@section('title', 'View Notes')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    {{ Form::open(array('url' => 'foo/bar')) }}
    {{ Form::close() }}
@endsection