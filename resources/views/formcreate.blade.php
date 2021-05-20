@extends('layouts.app')

@section('content')
<!DOCTYPE html>

<div class="container">

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
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
