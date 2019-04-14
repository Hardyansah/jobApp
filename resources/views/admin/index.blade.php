@extends("admin.app") 
@section("content")


<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
    <h1>SELAMAT DATANG ADMIN !!!</h1>
    <div class="w3-container">
        <h2>Data Informasi Pelamar</h2>
        <form action="{{route('admin.index')}}">
            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-primary" name="action" value="Unread">Unread</button>
                <button type="submit" class="btn btn-primary" name="action" value="Accept">Accept</button>
                <button type="submit" class="btn btn-primary" name="action" value="Reject">Reject</button>
            </div>
        </form>
        <div>
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
                    <?php $no = 0;?> @foreach($users as $user)

                    <?php $no++ ;?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{!!$user->name!!}</td>
                        <td>{!!$user->age!!}</td>
                        <td>Status</td>
                        <td>Action </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection