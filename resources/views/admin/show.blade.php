<form action="#" method="" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="card shadow mb-2">
        <div class="card-header py-4">
            {{-- @foreach ($users as $user) --}}


            <div class="form-group">
                <input type="hidden" name="user_id" id="user_id" class="input" value="{{$user->id}}">
            </div>

            <div class="form-group">
                <label for="name" class="label">Nama</label>
                <input type="name" name="name" id="name" class="form-control" value="{{$user->name}}">
                <div class="text-danger">{!! $errors->first('name')!!}</div>

                <div class="clear"></div>
            </div>

            <div class="form-group">
                <label for="email" class="label">E-mail</label>
                <input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
                <div class="text-danger">{!! $errors->first('email')!!}</div>

                <div class="clear"></div>
            </div>

        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-header py-4">
            @foreach ($details as $detail)


            <div class="form-group">
                <input type="file" name="file" id="file" autofocus="true" class="form-control-file border" disabled>
                <div class="text-danger">{!! $errors->first('file')!!}</div>

                <div class="clear"></div>
            </div>

            <div class="form-group">
                <label for="poto" class="poto">Foto Data Diri</label>
                <input type="file" name="poto" id="poto" autofocus="true" class="form-control-file border" value="{{$detail->poto}}">
                <div class="text-danger">{!! $errors->first('poto')!!}</div>

                <div class="clear"></div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="label">Alamat</label>
                <textarea name="alamat" id="alamat" cols="20" rows="10" class="form-control">{{$detail->alamat}}</textarea>
                <div class="text-danger">{!! $errors->first('alamat')!!}</div>
                <div class="clear"></div>

            </div>


            <div class="field">
                <label for="kota" class="label">Kota</label>
                <div class="control">
                    <input type="text" name="kota" id="kota" autofocus="true" class="form-control" value="{{$detail->kota}}">
                    <div class="text-danger">{!! $errors->first('kota')!!}</div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="field">
                <label for="agama" class="label">Agama</label>
                <div class="control">
                    <input type="text" name="agama" id="agama" autofocus="true" class="form-control" value="{{$detail->agama}}">
                    <div class="text-danger">{!! $errors->first('agama')!!}</div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="form-group">
                <label for="jk" class="label">Jenis Kelamin</label>
                <select name="jk" class="form-control" value="{{$detail->jk}}">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                <div class="text-danger">{!! $errors->first('jk')!!}</div>
                <div class="clear"></div>
            </div>

            <div class="field">
                <label for="no_telp" class="label">Nomor HP</label>
                <div class="control">
                    <input type="text" name="no_telp" id="no_telp" autofocus="true" class="form-control" value="{{$detail->no_telp}}">
                    <div class="text-danger">{!! $errors->first('no_telp')!!}</div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="field">
                <label for="sekolah" class="label">Sekolah</label>
                <div class="control">
                    <input type="text" name="sekolah" id="sekolah" autofocus="true" class="form-control" value="{{$detail->sekolah}}">
                    <div class="text-danger">{!! $errors->first('sekolah')!!}</div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="field">
                <label for="jurusan" class="label">Jurusan</label>
                <div class="control">
                    <input type="text" name="jurusan" id="jurusan" autofocus="true" class="form-control" value="{{$detail->jurusan}}">
                    <div class="text-danger">{!! $errors->first('jurusan')!!}</div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="field">
                <label for="alamat_sekolah" class="label">Alamat Sekolah</label>
                <div class="control">
                    <input type="text" name="alamat_sekolah" id="alamat_sekolah" autofocus="true" class="form-control" value="{{$detail->alamat_sekolah}}">
                    <div class="text-danger">{!! $errors->first('alamat_sekolah')!!}</div>
                </div>
                <div class="clear"></div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- @endforeach --}}
</form>