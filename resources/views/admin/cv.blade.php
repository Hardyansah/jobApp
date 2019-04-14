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
                        <div class="dropdown">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    @if ($user->status_cv == 0)
                                    <div class="btn btn-secondary"><strong>Unread </strong></div>
                                    @elseif ($user->status_cv == 1)
                                    <div class="btn btn-success"><strong>Accepted </strong> </div>                            @elseif ($user->status_cv == 2)
                            <div class="btn btn-danger"><strong>Rejected</strong> </div>                            @endif

                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('statuscvaccept', $user->id)}}">Accepted</a>
                                <a class="dropdown-item" href="{{route('statuscvreject', $user->id)}}">Rejected</a>
                            </div>
                        </div>
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