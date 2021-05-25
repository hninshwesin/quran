@extends('layouts.app')

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{{ session()->get('message') }}</li>
        </ul>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{{ session()->get('error') }}</li>
        </ul>
    </div>
@endif

@error('modelName')
    <div class="alert alert-danger">
        <ul>
            <li>{{ 'Name format is invalid, do not accept space.' }}</li>
        </ul>
    </div>
@enderror

<div class="container">

    <div class="card" style="background-color: #F0F0F0;">
        <div class="card-header text-center font-weight-bold">
        Create Quran 
        </div>
        <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('home')}}">
        @csrf

            <div class="form-group">
            <label for="modelName">Translator Name</label>
            <input type="text" name="modelName" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>

</div>
@endsection
