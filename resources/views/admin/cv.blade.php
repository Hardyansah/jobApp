@extends("admin.app") 
@section("content")


<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container">
        <h1>Data Informasi CV</h1>
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>CV</th>
                    <th>Status</th>
                    <th>Action </th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 0;?> @foreach($users as $user) @foreach ($user->detail as $detaill)
                <?php $no++ ;?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{!!$user->name!!}</td>
                    <td>{!!$detaill ->file!!}</td>
                    <td>
                        <form action="{{route('cv.store', $user->id)}}" method="POST">
                            {{csrf_field()}}
                            <select name="status_cv" class="btn btn-warning">
                                    <option value="0">Unread</option>
                                    <option value="1">Accept</option>
                                    <option value="2">Reject</option>
                            </select>
                            <input type="submit" class="btn btn-dark" value="Send">
                        </form>
                    </td>
                    <td>
                        <a href="{{asset($detaill ->file)}}" class="btn btn-success"> Download CV</a>
                    </td>
                </tr>
                @endforeach @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection