@extends('layouts.app') 
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-4">
        <h3>
            <center>Detail Informasi</center>
        </h3>

        <form action="#" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name" class="label">Nama</label>
                <input type="name" name="name" id="title" autofocus="true" class="form-control">
                <div class="text-danger">{!! $errors->first('name')!!}</div>

                <div class="clear"></div>
            </div>

            <div class="form-group">
                <label for="email" class="label">E-mail</label>
                <input type="text" name="email" id="email" autofocus="true" class="form-control">
                <div class="text-danger">{!! $errors->first('email')!!}</div>

                <div class="clear"></div>
            </div>

            <div class="form-group">
                <label for="file" class="label">CV</label>
                <input type="file" name="file" id="file" class="form-control-file border">
                <div class="text-danger">{!! $errors->first('file')!!}</div>

                <div class="clear"></div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="label">Alamat</label>
                <textarea name="alamat" id="alamat" cols="20" rows="10" class="form-control"></textarea>
                <div class="text-danger">{!! $errors->first('alamat')!!}</div>
                <div class="clear"></div>

            </div>


            <div class="field">
                <label for="kota" class="label">Kota</label>
                <div class="control">
                    <input type="text" name="kota" id="kota" autofocus="true" class="form-control">
                    <div class="text-danger">{!! $errors->first('kota')!!}</div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="field">
                <label for="agama" class="label">Agama</label>
                <div class="control">
                    <input type="text" name="agama" id="agama" autofocus="true" class="form-control">
                    <div class="text-danger">{!! $errors->first('agama')!!}</div>
                </div>
                <div class="clear"></div>
            </div>

            <br/>
            <button type="submit" class="btn btn-primary">save</button>
            <a href="#" class="btn btn-primary"> back</a><br/>
        </form>
    </div>
</div>
@endsection