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
                                        <span class="label label-success">Accept</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- tab menu profile --}}
                <div id="menu1" class="tab-pane fade">

                    <div class="clearfix card shadow mb-14">
                        <div class="card col-md-12">
                            <p><img src="{{asset('uploads/poto_181kb.jpg')}}" style="width:140px;height:190px; float:left;">                                <strong>Hardyansah Suwandi</strong><br/> Bandung, Jawa Barat<br/> Universitas Komputer Indonesia<br/>                                Bandung, 20 April 1995
                            </p>
                        </div>
                    </div>
                    <div class="clearfix card shadow">
                        <div class="card-header col-md-12">
                            <div class="col-md-6">
                                <span><h4>Pengalaman Kerja</h4></span>
                            </div>
                            <div class="col-md-6">
                                <span><button type="button" class="btn btn-warning pull-right ">+ Tambah Pengalaman Kerja</button></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4><strong>Programmer Staff</strong></h4>
                            <h4>Digital Mind System</h4>
                            <p>Duration:<br/> Juni 2015 - September 2018<br/> Job Description:<br/>
                            </p>
                        </div>
                    </div>

                    <div class="clearfix card shadow">
                        <div class="card-header col-md-12">
                            <div class="col-md-6">
                                <span><h4>Pendidikan</h4></span>
                            </div>
                            <div class="col-md-6">
                                <span><button type="button" class="btn btn-warning pull-right ">+ Tambah Pendidikan</button></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4><strong>UNIVERSITAS KOMPUTER INDONESIA</strong></h4>
                            <h4>Teknik Informatika</h4>
                            <p>Bandung, Jawa Barat</p>
                        </div>
                    </div>
                </div>

                {{-- tab menu Lowongan --}}
                <div id="menu2" class="tab-pane fade">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4><strong>Android Programmer</strong></h4>
                                </div>
                                <div class="card-body">
                                    <h4>PT. JobAPP</h4>
                                    <p>Deadline 30 April 2019</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary pull-right">
                                        Apply
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4><strong>Web Developer</strong></h4>
                                </div>
                                <div class="card-body">
                                    <h4>PT. JobAPP</h4>
                                    <p>Deadline 30 April 2019</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary pull-right">
                                            Apply
                                        </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4><strong>Software</strong></h4>
                                </div>
                                <div class="card-body">
                                    <h4>PT. JobAPP</h4>
                                    <p>Deadline 30 April 2019</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary pull-right">
                                            Apply
                                        </button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection