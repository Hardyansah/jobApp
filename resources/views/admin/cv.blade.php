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
                    <th>ID</th>
                    <th>Nama</th>
                    <th>CV</th>
                    <th>Action </th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user) @foreach ($user->detail as $detaill)
                <tr>
                    <td>{!!$user->id!!}</td>
                    <td>{!!$user->name!!}</td>
                    <td>{!!$detaill ->file!!}</td>
                    <td>
                        <a href="{{asset('$detaill ->file')}}" target="blank" class="btn btn-primary"> View</a>
                        <a href="{{asset($detaill ->file)}}" class="btn btn-success"> Download</a>
                    </td>
                    <td>
                        <form action="{{route('cv.store')}}" method="POST">
                            {{csrf_field()}}
                            <select name="status" class="btn btn-warning">
                                    <option value="Unread">Unread</option>
                                    <option value="Accept">Accept</option>
                                    <option value="Reject">Reject</option>
                            </select>
                            <input type="submit" class="btn btn-dark" value="Send">
                        </form>
                    </td>
                </tr>
                @endforeach @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection