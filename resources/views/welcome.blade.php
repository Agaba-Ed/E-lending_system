<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-lending</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/features.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="primarylightcolor pt-1">
        <div class="container-fluid">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-icon active text-white" aria-current="page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                        @elending
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-icon text-white" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        +1 (123) 456 7890
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-icon text-white" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone-forward" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
                        </svg>
                        +256 788 888 888
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-icon text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
                            <path
                                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                        </svg>
                        email@gmail.com
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md shadow-sm">
        <div class="container-fluid ">
            <a class="navbar-brand ms-3" href="{{ url('/') }}">
                <img src="../../assets/images/logo.svg" alt="" width="40" height="40"
                    class="d-inline-block align-text-center ">
                E Lending
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item ms-4">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item ms-4 me-4">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>

                <ul class="nav">
                    <li class="nav-item me-1">
                        <a href="{{ route('login') }}"><button type="button nav-link" class="btn btn-dark">Log
                                In</button></a>
                    </li>

                    <li class="nav-item me-2">
                        <a href="{{ route('register') }}"><button type="button nav-link" class="btn btn-dark">Sign
                                Up</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container-fluid pt-5 hero hero-background">
        <div class="row pt-5 ms-5 mb-5 ">
            <div class="col-md-6 pt-5">
                <div class="hero-area pt-5 text-white">
                    <h1 class="hero-title" id="transition1">Instant Loans</h1>
                    <p class="hero-text mb-5" id="transition2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                    </p>
                    <button type="button" class="btn btn-dark mt-5">Get Started</button>
                </div>
                <div class="col-md-6">
                    <div class="hero-image">
                        <img src="../../assets/images/hero-image.svg" alt="">
                    </div>
                </div>
    </section>
    <section>
        <div class="container-fluid footer-container pt-5 primarylightcolor">
            <div class="row footer-row mx-5">

<!-- this is the about section of the landing site-->
    </section>
    <section>
        <!--
            ::About us Area Start::
            ::author:: @MusanjeLawrence
         -->
         <div class="section1">
        <div class="container123">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>was incorporated in March 2018 by Uganda registration services </h3>
                    <p>bureau and is now a home
                        for researchers, innovatain aim is to be a major contributor to local capacity 
                        building, enabling creation of digital ecosystem in western Uganda for the development of technology businesses leading to 
                        increased employment </p>
                        <div class="button123">
                            <a href="">Read More</a>
                        </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab-fa-facebook-f"></i></a>
                    <a href=""><i class="fab-fa-twitter"></i></a>
                    <a href=""><i class="fab-fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="images/about.jpg">
            </div>
        </div>
    </div>
    </section>
    <section>
        <!--
            ::contact section start here::
            ::author:: @Agaba-Ed
         -->
    </section>
    <section>
        <!--
            ::footer section start here::
            ::to be built:: @Agaba-Ed
         -->
         <div class="container-fluid footer-container mt-5">
            <div class="row nav-row">
                <div class="col">
                    <h4 class="text-white" id="transition1">Instant Loans</h4>
                    <p class="mb-5 text-white" id="transition2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                    </p>
                </div>
                <div class="col">
                    <h4 class="text-white" id="transition1">Instant Loans</h4>
                    <p class="mb-5 text-white" id="transition2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                    </p>
                </div>
                <div class="col">
                    <h4 class="text-white" id="transition1">Instant Loans</h4>
                    <p class="mb-5 text-white" id="transition2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                    </p>
                </div>
                <div class="col">
                    <h4 class="text-white" id="transition1">Instant Loans</h4>
                    <p class="mb-5 text-white" id="transition2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                    </p>
                </div>
                <div class="col">
                    <h4 class="text-white" id="transition1">Instant Loans</h4>
                    <p class="mb-5 text-white" id="transition2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                    </p>
                    <div class="input-group mb-3">

                        <input type="text" class="form-control" placeholder="Email address" aria-label="Email address"
                            aria-describedby="basic-addon2">

                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Join Us</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-row">

            </div>
            <div class="row end-footer primarycolor">

            </div>
        </div>
</body>

</html>
