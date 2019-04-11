@extends("admin.app") 
@section("content")


<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container">
        <h1>Selamat Datang Admin !!</h1>
    </div>
</div>
@endsection