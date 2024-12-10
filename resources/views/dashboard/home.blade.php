@extends('dashboard.admin')

@section('content')
<div id="main-content" class="container allContent-section py-4">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Users: {{ $users }}</h4>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Donation : {{ $donations }}</h4>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Volunteer: {{ $volunteers }}</h4>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total article: {{ $articles }}</h4>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-comment mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Feedback: {{ $feedback }}</h4>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-graduation-cap mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total education: {{ $feedback }}</h4>
            </div>
        </div>
    </div>

</div>
@endsection
