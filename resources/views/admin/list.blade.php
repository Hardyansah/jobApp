@extends("admin.app") 
@section("content")


<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container">
        <h1>Data User</h1>
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>E-Mail</th>
                    <th>Tanggal Lahir</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user) {{-- @foreach($details as $detail ) --}}
                <tr>
                    <td>{!!$user->name!!}</td>
                    <td>{!!$user->email!!}</td>
                    <td>{!!$user->age!!}</td>
                    <td>
                        <form method="POST" action="{{route('admin.destroy', $user->id)}}" class="form-horizontal" role="form">
                            {{csrf_field()}}{{method_field('DELETE')}}
                            <a href="{{route('admin.show', $user->id)}}" class="btn btn-warning">show</a> {{-- <button type="button"
                                class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                               Show
                              </button> --}}
                            <a href="#" class="btn btn-primary"> Edit</a>
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                {{-- @endforeach --}} @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Detail User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                {{-- <a href="{{route('admin.show', $user->id)}}" class="btn btn-info">tampilkan</a> --}}

            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
@endsection