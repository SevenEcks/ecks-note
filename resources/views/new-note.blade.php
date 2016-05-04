<!-- Stored in resources/views/view-notes.blade.php -->

@extends('layouts.master')

@section('title', 'Add Notes')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::open(array('url' => 'notes/create')) }}
    {{ Form::label('name', 'Name: ') }}
    {{ Form::text('name') }}
    {{ Form::submit() }}
    {{ Form::close() }}
@endsection