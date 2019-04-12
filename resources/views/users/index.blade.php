@extends('layouts.app') 
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
    img {
        float: left;
        padding: 5px 10px;
    }

    p {
        padding: 10px 0px;
    }
</style>
<div class="container">
    <div class="card shadow mb-2">
        <div class="card-header py-4">
            <ul class="nav nav-tabs text-center">
                <li class="active col-md-4"><a data-toggle="tab" href="#dashboard">Dashboard</a></li>
                <li class="col-md-4"><a data-toggle="tab" href="#menu1">Profile</a></li>
                <li class="col-md-4"><a data-toggle="tab" href="#menu2">Lowongan</a></li>
            </ul>
            {{-- tab menu Dashboard --}}
            <div class="tab-content">
                <div id="dashboard" class="tab-pane fade in active">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Aplikasi Saya</h4>
                        </div>
                        <div class="panel-body">
                            <div class="media media-jobAds">
                                <div class="media-left">
                                    <img src="{{asset('uploads/newjobs.jpg')}}" style="width:140px;height:190px; float:left;">
                                </div>
                                <div class="media-body">
                                    <h3><a href="">Project Manager</a></h3>
                                    <h4>PT. JobApp</h4>
                                    <p> Bandung</p>
                                </div>
                                <div class="media-right">
                                    <p class="text-right text-muted">
                                        <div class="alert alert-secondary">
                                            <strong> @foreach ($details as $detail) 
                                                            {{$detail->status_cv}}
                                                        @endforeach</strong>                                            You should <a href="#" class="alert-link">read this message</a>.
                                        </div>


                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- tab menu profile --}}
                <div id="menu1" class="tab-pane fade">
    @include('users.profile')
                </div> {{-- tab menu Lowongan --}}
                <div id="menu2" class="tab-pane fade">
    @include('users.lowongan')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection