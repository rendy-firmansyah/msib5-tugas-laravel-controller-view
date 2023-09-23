<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas MSIB5 Gits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    {{-- Css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    @include("component.navbar")
    <section class="hero">
        <div class="container-fluid">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{asset('img/bg-front.jpg')}}" alt="" class="banner-img w-100 vh-100">
                <div class="tagline">
                    <h1 class="typing text-white text-center">Welcome to the fun object website</h1>
                    <p class="text-white text-center">This is one of the websites for the tasks of MSIB Gits.id Partners in creating a website display by implementing controllers and views in the Laravel framework.</p>
                    <div class="d-flex justify-content-center">
                        <div class="medsos d-flex justify-content-center shadow-lg rounded">
                            <div class="list-medsos">
                                <i class="fa-brands fa-square-instagram fa-2xl me-2"></i>
                                <i class="fa-brands fa-square-whatsapp fa-2xl me-2"></i>
                                <i class="fa-brands fa-linkedin fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-web" id="about">
        <div class="container w-100 vh-100">
            <h2 class="text-center top-distance text-light bottom-distance">3D Cube Object</h2>
            <div class="row">
                <div class="col-6 d-flex justify-content-center">
                    <div class="d-cube">
                        <div class="cube">
                            <div class="side front">
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                            </div>
                            <div class="side back">
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                            </div>
                            <div class="side left">
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                            </div>
                            <div class="side top">
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                            </div>
                            <div class="side bottom">
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                                <div class="inside">
                                    <div class=""></div><div class=""></div><div class=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-center text-light object-3d-text">This is a three-dimensional object with a square or cubic shape that is created using HTML and CSS by utilizing rotate and translate as a medium for movement. I made this by looking at examples from YouTube references on the @codingvishal channel</h4>
                </div>
            </div>
        </div>
    </section>

    {{-- Bundle JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- Script JS Typing --}}
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"
      referrerpolicy="no-referrer"
    ></script>
    <script src="{{asset('js/script.js')}}"></script>

</body>
</html>