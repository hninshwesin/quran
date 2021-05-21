@extends('layouts.app')

@section("menu")
    @foreach($user_model as $usm)
        @php
            $mdn=lcfirst($usm->model_name);
        @endphp
        <li>
        <a href="{{url("$mdn"."s")}}" class="text-white"><i class="fa fa-edit text-white mr-4"></i>{{ucfirst($usm->model_name)}}</a>
        </li>
    @endforeach
@endsection

<!-- @section('content')
<!DOCTYPE html>

<div class="container">

    <div class="row">

    </div>

</div>
@endsection -->
