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
                                    <h3>Status CV <strong>{{$currentUser->name}}</strong></h3>
                                    <h4>PT. JobApp</h4>
                                    <p> Bandung</p>
                                </div>
                                <div class="media-right">
                                    <p class="text-right text-muted">
<<<<<<< HEAD
                                        @if ($currentUser->status_cv == 0)
                                        <div class="alert alert-secondary"><strong>Unread </strong></div>
                                        @elseif ($currentUser->status_cv == 1)
                                        <button class="alert alert-success"><strong>Accepted </strong> </button> @else
                                        <button class="alert alert-danger"><strong>Rejected</strong> You should <a href="#" class="alert-link" data-toggle="modal" data-target="#myModal">read this message</a>.</button>                                        @endif
=======
                                        @foreach ($details as $detail) @if ($detail->status_cv == 0)
                                        <div class="alert alert-secondary"><strong>Unread </strong></div>
                                        @elseif ($detail->status_cv == 1)
                                        <button class="alert alert-success"><strong>Accepted </strong> </button> @else
                                        <button class="alert alert-danger"><strong>Rejected</strong> You should <a href="#" class="alert-link" data-toggle="modal" data-target="#myModal">read this message</a>.</button>                                        @endif @endforeach
>>>>>>> a1e7126f1e5aa6392ba533b6a454d6d31ce11503
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

            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">PT. JobApp</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Mohon Maaf Kepada Saudara/i <strong>{{$currentUser->name}}</strong> CV Anda belum memenuhi kriteria perusahaan
                kami
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
@endsection