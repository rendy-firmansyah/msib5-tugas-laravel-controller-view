@extends("landing.info-kampus")

@section('content')
    <div class="auto-container dx-all">
        <div class="location-border d-flex justify-content-between">
            <div class="obj d-flex align-items-center">
                <i class="fa-solid fa-location-dot fa-lg me-2 align-self-center" style="color: #ff9138;"></i>
                <p class="text-light m-0">{{$alamat}}</p>
            </div>
            <div class="obj-two d-flex align-items-center">
                <i class="fa-solid fa-phone fa-lg align-self-center me-2" style="color: #ff9138;"></i>
                <p class="text-light m-0">{{$telepon}}</p>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/bg-unej.jpg')}}" class="d-block w-100 img-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>{{$univ}}</h2>
                    <p>Merupakan salah satu universitas negeri unggulan yang bertempat di Jawa Timur. Kampus ini mengusung visi “Menjadi Universitas unggul dalam pengembangan sains, teknologi dan seni berwawasan lingkungan, bisnis, dan pertanian industrial.”.</p>
                    <a href="https://unej.ac.id/"><button type="button" class="btn">Lihat Selengkapnya</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/fasilkom.jpg')}}" class="d-block w-100 img-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>{{$fakultas}}</h2>
                    <p>Fakultas Ilmu Komputer Universitas Jember berfokus pada bidang pengembangan ilmu komputer yang ditujukan untuk menunjang sektor industri pertanian sesuai dengan visi dari Fasilkom Unej</p>
                    <a href="https://ilkom.unej.ac.id/"><button type="button" class="btn">Lihat Selengkapnya</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/lp2m.jpg')}}" class="d-block w-100 img-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>LP2M - Lembaga Penelitian dan Pengabdian kepada Masyarakat</h2>
                    <p>Pusat Informasi dan Layanan Terpadu LP2M Universitas Jember. Memberikan berbagai macam layanan terbaik (excellent service) kepada stakeholder.</p>
                    <a href="https://lp2m.unej.ac.id/"><button type="button" class="btn">Lihat Selengkapnya</button></a>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('content-two')
    <h2 class="text-center top-distance text-light">Ormawa Fakultas Ilmu Komputer</h2>
    <p class="text-center text-light mt-5">Organiasasi mahasiswa yang ada dalam fakultas ilmu komputer antara lain adalah : </p>
    <div class="row">
        <div class="col-4 d-flex justify-content-center">
            <div class="card">
                <img src="{{asset('img/himasif.png')}}" class="card-img" alt="" />
                <div class="card-body">
                    <h1 class="card-title text-shadow">HIMASIF</h1>
                    <p class="card-sub-title">Himpunan Mahasiswa Sistem Informasi</p>
                    <p class="card-info text-shadow">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quod
                        praesentium ratione explicabo asperiores repudiandae corporis est. Sit
                        maxime repellendus ullam minus ad debitis. Maiores?
                    </p>
                    <a href="https://home.himasif.id/"><button type="button" class="btn mt-2">Website Info</button></a>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="card">
                <img src="{{asset('img/himatif.png')}}" class="card-img" alt="" />
                <div class="card-body">
                    <h1 class="card-title text-shadow">HIMATIF</h1>
                    <p class="card-sub-title">Himpunan Mahasiswa Teknologi Informasi</p>
                    <p class="card-info text-shadow">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quod
                        praesentium ratione explicabo asperiores repudiandae corporis est. Sit
                        maxime repellendus ullam minus ad debitis. Maiores?
                    </p>
                    <a href="https://www.himatifunej.org/"><button type="button" class="btn mt-2">Website Info</button></a>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="card">
                <img src="{{asset('img/hmif.png')}}" class="card-img" alt="" />
                <div class="card-body">
                    <h1 class="card-title text-shadow">HMIF</h1>
                    <p class="card-sub-title">Himpunan Mahasiswa Informatika</p>
                    <p class="card-info text-shadow">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quod
                        praesentium ratione explicabo asperiores repudiandae corporis est. Sit
                        maxime repellendus ullam minus ad debitis. Maiores?
                    </p>
                    <a href="https://hmifunej.id/"><button type="button" class="btn mt-2">Website Info</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-6 d-flex justify-content-center">
            <div class="card">
                <img src="{{asset('img/bpm.png')}}" class="card-img" alt="" />
                <div class="card-body">
                    <h1 class="card-title text-shadow">BPM</h1>
                    <p class="card-sub-title">Badan Perwakilan Mahasiswa</p>
                    <p class="card-info text-shadow">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quod
                        praesentium ratione explicabo asperiores repudiandae corporis est. Sit
                        maxime repellendus ullam minus ad debitis. Maiores?
                    </p>
                    <a href=""><button type="button" class="btn mt-2">Website Info</button></a>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <div class="card">
                <img src="{{asset('img/bem.png')}}" class="card-img" alt="" />
                <div class="card-body">
                    <h1 class="card-title text-shadow">BEM</h1>
                    <p class="card-sub-title">Badan Eksekutif Mahasiswa</p>
                    <p class="card-info text-shadow">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quod
                        praesentium ratione explicabo asperiores repudiandae corporis est. Sit
                        maxime repellendus ullam minus ad debitis. Maiores?
                    </p>
                    <a href=""><button type="button" class="btn mt-2">Website Info</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection