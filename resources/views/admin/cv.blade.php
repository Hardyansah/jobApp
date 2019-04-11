@extends("admin.app") 
@section("content")


<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container">
        <h1>Data User</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>CV</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>


                <td>aaaaaa</td>
                <td>aaaaaa</td>
                <td>aaaaaa</td>
                <td>aaaaaa</td>
                {{-- @foreach($users as $user)
                <tr>
                    <td>{!!$user->name!!}</td>
                    <td>{!!$user->email!!}</td>
                    <td>{!!$user->age!!}</td>
                    <td>x</td>
                    <td>x</td>
                    <td>x</td>
                    <td>
                        <form method="POST" action="#" class="form-horizontal" role="form">
                            {{csrf_field()}}{{method_field('DELETE')}}
                            <a href="#" class="btn btn-primary"> Edit</a>
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
@endsection