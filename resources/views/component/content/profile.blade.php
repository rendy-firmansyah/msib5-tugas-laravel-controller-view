@extends("landing.creator-profile")

@section('content')
    <h2 class="text-center top-distance text-light pb-1">Creator Profile</h2>
    <p class="text-center text-light pb-lg-5">I'am a student of universitas jember</p>
    <div class="foto-profile d-flex justify-content-center">
        <img src="{{asset('img/profiler.jpg')}}" alt="profile.jpeg">
    </div>
    <div class="distance-border d-flex justify-content-center">
        <div class="about mt-5">
            <div class="content-about mt-3">
                <h3 class="text-center mb-4">Biodata</h3>
                <p class="text-center sub-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae cumque commodi tenetur ducimus dicta, sequi quo aliquid animi labore pariatur nesciunt laboriosam enim quis dolorum tempore, a, asperiores praesentium iusto.</p>
            </div>
        </div>
    </div>
    <h3 class="text-center mt-4 text-light">Details</h3>
    <h6 class="text-center mt-4 text-light">Nama:</h6>
    <p class="text-center mt-2 text-light">{{ $name }}</p>
    <h6 class="text-center mt-4 text-light">Age:</h6>
    <p class="text-center mt-2 text-light">{{ $age }}</p>
    <h6 class="text-center mt-4 text-light">Prodi:</h6>
    <p class="text-center mt-2 text-light">{{ $prodi }}</p>
    <h6 class="text-center mt-4 text-light">Universitas:</h6>
    <p class="text-center mt-2 text-light">{{ $univ }}</p>
    <h6 class="text-center mt-4 text-light">Moto:</h6>
    <p class="text-center mt-2 text-light">{{ $moto }}</p>

    </div>
@endsection