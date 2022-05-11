@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/profile-pic.jpg" alt="" class="rounded-circle" style= "max-height: 200px;">
        </div>
        <div class="col-9 pt-5">
            <div>
                <!-- here we call the user name -->
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div style= "padding-right: 1rem;">
                    <strong>153</strong> post
                </div>
                <div style= "padding-right: 1rem;">
                    <strong>20k</strong> followers
                </div>
                <div style= "padding-right: 1rem;">
                    <strong>523</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">
                <strong>{{ $user->profile->title }}</strong>
            </div>
            <div class="">
                {{ $user->profile->description }}
            </div>
            <div><a href=""> {{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">  <img src="/img/post.png" class="w-100">  </div>
        <div class="col-4">  <img src="/img/post.png" class="w-100">  </div>
        <div class="col-4">  <img src="/img/post.png" class="w-100">  </div>
    </div>
</div>
@endsection
