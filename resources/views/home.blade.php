@extends('layouts.app')

@section('content')
<!DOCTYPE html>

<div class="container">

    <div class="row">

    </div>
    <!-- @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
        Create Quran 
        </div>
        <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('create')}}">
        @csrf

            <div class="form-group">
            <label for="exampleInputEmail1">Translator Name</label>
            <input type="text" id="title" name="title" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div> -->

</div>
@endsection
