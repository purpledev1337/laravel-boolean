@extends('layouts.main-layout')

@section('content')
    
    <div id="postcard_area">

        <a href="{{ route('postcard.create') }}" class="btn btn-primary m-3 p-3">Create new Postcard</a>

        <Postcards-component></Postcards-component>
    </div>

@endsection