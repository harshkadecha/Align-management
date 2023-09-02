<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custome.css') }}" rel="stylesheet">
    <style>
        body {
            background: url("{{ asset('images/home-page-bg-2.jpg') }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Lato', sans-serif;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300;1,400&display=swap"
        rel="stylesheet">
    <title>Align Management</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custome" style="">
        <div class="container-fluid">
            <img src="{{ asset('images/logo/AM_Logo-1.svg') }}" class="img-fluid img-responsive navbar-brand ps-4"
                style="width: 15%;">
            {{-- <img src="{{ asset('images/logo/Removal-979.png')}}" class="img-fluid img-responsive navbar-brand ps-4" style="height: 150px;"> --}}
            {{-- <a class="navbar-brand ps-4" href="#">Align Management</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-5 mb-3 mb-lg-5 text-end">
                    <li class="nav-item pe-2">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="#">WHO WE ARE</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="#">OUR STRATAEGY</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="#">PAY YOUR BILL</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="#">REPAIRS</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="#">FOR SALE</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="#">FOR RENT</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- section-1 content --}}
    {{-- <section class="content-wrapper" style="padding-top: 250px; padding-bottom: 80px;">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 p-5" style="color:black;">
                <h3>SERVICING THE NEW YORK TRISTATE AREA, WESTCHESTER COUNTY, RICHMOND COUNTY AND NEW JERSEY.</h3>
            </div>
        </div>
    </section> --}}
    <section class="content-wrapper" style="padding-top: 250px; padding-bottom: 330px;">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 pt-1 pb-1 w-auto ps-5 pe-5 " style="color:#FFD700 !important;">
                <h3>Align Management LLC.</h3>
            </div>
        </div>
    </section>
    {{-- section-2 content --}}
    <section>
        <div class="section-2 pb-5">
            <p class="text-center pt-5">EVERYTHING YOUR PROJECT NEEDS FROM ONE POWERFUL SOURCE.</p>
            <div class="row m-0 mt-4 d-flex align-items-center justify-content-center">
                <div class="col-3">
                    <ul>
                        <li>Customized reporting for your properties based on your specifications</li>
                        <li>Customized reporting for your properties based on your specifications</li>
                        <li>Customized reporting for your properties based on your specifications</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul>
                        <li>Customized reporting for your properties based on your specifications</li>
                        <li>Customized reporting for your properties based on your specifications</li>
                        <li>Customized reporting for your properties based on your specifications</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul>
                        <li>Customized reporting for your properties based on your specifications</li>
                        <li>Customized reporting for your properties based on your specifications</li>
                        <li>Customized reporting for your properties based on your specifications</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="content-wrapper" style="padding-top: 150px; padding-bottom: 80px;">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 p-5" style="color:black;">
                <h3>OUR CUSTOMER STRATEGY.</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="section-2">
            <div class="container pb-5">
                <p class="text-center pt-5">CONVENIENCE, GREATER EFFICIENCY, ECONOMY.</p>
                <p>Consider the advantages of hiring one company with the expertise to handle all property issues
                    including maintenance, purchasing, construction, bookkeeping, government compliance and collections.
                    Concord Management can offer these advantages because of our affiliated companies performing
                    bookkeeping, architecture, construction, government financing and real estate consulting. All this
                    is at your fingertips under one umbrella.

                    We are unique in our capacity to expertly address all the needs of your property. Concord can work
                    in a variety of capabilities including:</p>
                <ul>
                    <li>Full service management</li>
                    <li>Back office management</li>
                    <li>Tax credit compliance services</li>
                    <li>Development services</li>
                </ul>
                <p>By hiring Concord Management you will enjoy the benefits of our proven track record of controlling
                    costs and maximizing your revenue.

                </p>
            </div>
        </div>
    </section>

    <section class="content-wrapper" style="padding-top: 150px; padding-bottom: 80px;">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 p-5" style="color:black;">
                <h3>MEET THE TEAM</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="section-2">
            <div class="container pb-5">
                <h5 class="text-center pt-5">MICHAEL ROONEY JR.</h5>
                <p>Michael Rooney Jr. is the Chief Executive Officer of Concord. Michael received his BA in Finance from
                    Pace University and has been working in the real estate industry ever since. Michael has overseen
                    large scale development projects across NYC and has successfully managed buildings through extensive
                    tenant-in-place renovations. However, Michael's strength is transforming distressed properties with
                    excessive violations and compliance issues into valuable assets. He accomplishes this by his firm
                    belief that sound management procedures can overcome every property management problem.</p>
            </div>
        </div>
    </section>


    <section>
        <div class="section-2 home-page-secton-1">
            <div class="container pb-5 text-center pt-5 pb-5">
                <p>© Copyright 2014, Concord Management of New York. All rights reserved.</p>
            </div>
        </div>
    </section>


</body>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</html>
