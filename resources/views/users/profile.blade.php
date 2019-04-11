<style>
    p {
        font-size: 17px;
    }
</style>

<div class="clearfix card shadow mb-14">
    <div class="media media-jobAds">
        <div class="row">
            <div class="col-sm-2">
                <div class="media-left"> @foreach($details as $detail )
                    <img src="{{ asset($detail->poto)}}" style="width:150px;height:190px;">
                </div>
            </div>
            <div class="col-sm-10">
                <div class="media-body">
                    <h3><strong>{{$currentUser->name}}</strong></h3>
                    <p><strong>Alamat :</strong> {{$detail->alamat}}
                        <br/><strong>Jenis Kelamin : </strong>{{$detail->jk}}
                        <br/><strong>Nomor HP : </strong>{{$detail->no_telp}}
                        <br/><strong>Tanggal Lahir : </strong>{{$currentUser->age}}
                        <br/><strong>E-mail : </strong>{{$currentUser->email}}
                    </p>
                </div>
                <div class="media-right">
                    <p class="text-right text-muted">
                        <span><a href="{{route('details.edit', $currentUser->id)}}" class="btn btn-success">Edit Profile</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix card shadow">
    <div class="card-header col-md-12">
        <div class="col-md-6">
            <span><h4>Pendidikan</h4></span>
        </div>

    </div>
    <div class="card-body">
        <h4><strong>{{$detail->sekolah}}</strong></h4>
        <h4>{{$detail->jurusan}}</h4>
        <p>{{$detail->alamat_sekolah}}</p>
        @endforeach
    </div>
</div>