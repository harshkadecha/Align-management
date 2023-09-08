@extends('layout.main')

@section('title')
    Welcome
@endsection

@section('description')
    Align Management is a property management company that manages residential and commercial properties.
@endsection

@section('meta')
    <meta name="keywords"
        content="Align management, align management, residential and commercial properties, residential and commercial properties, residential properties, commercial properties, properties, manages residential and commercial properties" />
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custome" style="">
        <div class="container-fluid">
            {{-- <a href="/" class="ps-4"><img src="{{ asset('images/logo/Picture2.png') }}" class="img-fluid img-responsive navbar-brand ps-4"
            style="width: 40%;"></a> --}}
            {{-- <img src="{{ asset('images/logo/Removal-979.png')}}" class="img-fluid img-responsive navbar-brand ps-4" style="height: 150px;"> --}}
            <a class="navbar-brand ps-4" href="{{ route('home') }}"><img src="{{ asset('images/logo/Picture2.png') }}"
                    class="img-fluid img-responsive navbar-brand ps-4 navbar-img-custome"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256"
                        width="35px" height="35px">
                        <defs>
                            <linearGradient x1="12.066" y1="0.066" x2="34.891" y2="22.891"
                                gradientUnits="userSpaceOnUse" id="color-1">
                                <stop offset="0.237" stop-color="#ffd700"></stop>
                                <stop offset="0.85" stop-color="#ffd700"></stop>
                            </linearGradient>
                            <linearGradient x1="12.066" y1="12.066" x2="34.891" y2="34.891"
                                gradientUnits="userSpaceOnUse" id="color-2">
                                <stop offset="0.237" stop-color="#ffd700"></stop>
                                <stop offset="0.85" stop-color="#ffd700"></stop>
                            </linearGradient>
                            <linearGradient x1="12.066" y1="24.066" x2="34.891" y2="46.891"
                                gradientUnits="userSpaceOnUse" id="color-3">
                                <stop offset="0.237" stop-color="#ffd700"></stop>
                                <stop offset="0.85" stop-color="#ffd700"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(5.33333,5.33333)">
                                <path
                                    d="M43,15h-38c-1.1,0 -2,-0.9 -2,-2v-2c0,-1.1 0.9,-2 2,-2h38c1.1,0 2,0.9 2,2v2c0,1.1 -0.9,2 -2,2z"
                                    fill="url(#color-1)"></path>
                                <path
                                    d="M43,27h-38c-1.1,0 -2,-0.9 -2,-2v-2c0,-1.1 0.9,-2 2,-2h38c1.1,0 2,0.9 2,2v2c0,1.1 -0.9,2 -2,2z"
                                    fill="url(#color-2)"></path>
                                <path
                                    d="M43,39h-38c-1.1,0 -2,-0.9 -2,-2v-2c0,-1.1 0.9,-2 2,-2h38c1.1,0 2,0.9 2,2v2c0,1.1 -0.9,2 -2,2z"
                                    fill="url(#color-3)"></path>
                            </g>
                        </g>
                    </svg></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-5 mb-3 mb-lg-5 text-end">
                    <li class="nav-item">
                        <a class="nav-link nav-link-option-1 active @if (\Request::route()->getName() == 'home') nav-link-active @endif"
                            aria-current="page" href="{{ route('option1.home') }}" style="color: #ce4e79 !important;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-option-1 @if (\Request::route()->getName() == 'mission') nav-link-active @endif" aria-current="page"
                            href="{{ route('option1.mission') }}" style="color: #ce4e79 !important;">MISSION</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-link-option-1 @if (\Request::route()->getName() == 'services') nav-link-active @endif"
                            href="{{ route('option1.services') }}" style="color: #ce4e79 !important;">SERVICES</a>
                    </li>
                    {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href=""> Profile</a>
                    <a class="dropdown-item" href="">
                        <i data-feather='user' class="me-50"></i> Profile</a>
                    <a class="dropdown-item" href="">
                        <i class="me-50" data-feather="power"></i> Logout</a>
                    <div class="dropdown-menu dropdown-menu-end" style="display:none" aria-labelledby="navbarDropdown">

                        <p class="alert alert-danger"> asd asd </p>
                    </div>
                </div> --}}


                    {{-- <li class="nav-item ">
                    <a class="nav-link" href="#">PAY YOUR BILL</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link @if (\Request::route()->getName() == 'repairs') nav-link-active @endif"
                        href="{{ route('repairs') }}">REPAIRS</a>
                </li> --}}
                    <li class="nav-item ">
                        <a class="nav-link nav-link-option-1 @if (\Request::route()->getName() == 'contact_us') nav-link-active @endif"
                            href="{{ route('option1.contact_us') }}" style="color: #ce4e79 !important;">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        {{-- <div class="dropdown nav-link d-flex">
                        <span><img src="{{ asset('images/menu.png') }}" style="width: 35px; height: 35px;"/></span>
                        <div class="dropdown-content">
                            <p>Hello World!</p>
                            <p>Hello World!</p>
                            <p>Hello World!</p>
                        </div>
                    </div> --}}
                        <div class="dropdown nav-link pe-5 dropleft">
                            {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('images/menu.png')}}" style="width: 35px;height: 35px;">
                        </button> --}}

                            <img src="{{ asset('images/menu.png') }}" style="width: 35px;height: 35px;"
                                class="dropdown-toggle nav-link me-5" type="button" id="dropdownMenuButton"
                                data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false" />
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                                {{-- <a class="dropdown-item" href="#">Action</a> --}}
                                <a class="dropdown-item nav-link nav-link-option-1" href="#" style="color: #ce4e79 !important;">PAY YOUR BILL</a>
                                <a class="dropdown-item nav-link nav-link-option-1" href="{{ route('option1.repairs') }}" style="color: #ce4e79 !important;">REPAIRS</a>
                            </div>
                        </div>
                    </li>
                    {{-- <li class="nav-item">
                    <!-- Split dropleft button -->
                    <div class="btn-group">
                        <div class="btn-group dropleft" role="group">
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropleft</span>
                            </button>
                            <img src="{{ asset('images/menu.png') }}" style="width: 35px;height: 35px;"
                            class="dropdown-toggle nav-link me-5" type="button" id="dropdownMenuButton"
                            data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false" />

                            <div class="dropdown-menu">
                                <a class="dropdown-item nav-link" href="#">PAY YOUR BILL</a>
                                <a class="dropdown-item nav-link" href="{{ route('repairs') }}">REPAIRS</a>
                            </div>
                        </div>
                    </div>
                </li> --}}

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
    <section class="content-wrapper section-1-hero-content">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 pt-1 pb-1 w-auto ps-5 pe-5 rounded-5" style="color:#ce4e79 !important;">
            {{-- <div class="container home-page-secton-1 pt-1 pb-1 w-auto ps-5 pe-5 rounded-5"
                style="color:black !important;"> --}}
                <h3><b>ALIGN MANAGEMENT,LLC</b></h3>
            </div>
        </div>
    </section>
    {{-- section-2 content --}}
    {{-- <section class="d-flex align-items-center">
        <div class="section-2 pb-5 container d-flex align-items-center row p-0 m-0">
            <p class="text-center pt-5 col-12">EVERYTHING YOUR PROJECT NEEDS FROM ONE POWERFUL SOURCE.</p>
            <div class="row m-0 mt-4 d-flex align-items-center justify-content-center ">
                <div class="col-12 col-md-3">
                    <ul>
                        <li>Customized reporting for your properties based on your specifications</li>
                        <li>Preparation of annual budget</li>
                        <li>Online payment option for tenants</li>
                        <li>Expertise in lowering maintenance costs and capital improvements</li>
                        <li>Utility Analysis</li>
                        <li>Bookkeeping services</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-3">
                    <ul>
                        <li>Expertise in HUD, HCR, HPD, regulations, and compliance</li>
                        <li>Tax credit compliance</li>
                        <li>Home compliance</li>
                        <li>Expertise in managing rentals, condos, and coops</li>
                        <li>Maximize property income</li>
                        <li>Expertise in resolving Section 8 problems</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-3">
                    <ul>
                        <li>Dedicated in-house legal department</li>
                        <li>In house architects and engineers available</li>
                        <li>Expertise in procuring government subsidies and financing</li>
                        <li>Expertise in security systems that can be customized to your buildings</li>
                        <li>Annual RPIE filing</li>
                    </ul>
                </div>
            </div>

        </div>
    </section> --}}

    <section class="section-2">
        <div class="container">
            <div class="row section-2-container">
                <div class="text-center section-2-heading">
                    <h4><b>EVERYTHING YOUR PROJECT NEEDS FROM ONE POWERFUL SOURCE</b></h4>
                </div>
                <div class="col-12 col-md-4 section-2-ul">
                    <ul>
                        <li>Customized reporting for your properties based on your specifications</li>
                        <li>Preparation of annual budget</li>
                        <li>Online payment option for tenants</li>
                        <li>Expertise in lowering maintenance costs and capital improvements</li>
                        <li>Utility Analysis</li>
                        <li>Bookkeeping services</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 section-2-ul">
                    <ul>
                        <li>Expertise in HUD, HCR, HPD, regulations, and compliance</li>
                        <li>Tax credit compliance</li>
                        <li>Home compliance</li>
                        <li>Expertise in managing rentals, condos, and coops</li>
                        <li>Maximize property income</li>
                        <li>Expertise in resolving Section 8 problems</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 section-2-ul">
                    <ul>
                        <li>Dedicated in-house legal department</li>
                        <li>In house architects and engineers available</li>
                        <li>Expertise in procuring government subsidies and financing</li>
                        <li>Expertise in security systems that can be customized to your buildings</li>
                        <li>Annual RPIE filing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="content-wrapper" style="padding-top: 150px; padding-bottom: 80px;">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 p-5" style="color:black;">
                <h3>OUR CUSTOMER STRATEGY.</h3>
            </div>
        </div>
    </section> --}}

    <section class="content-wrapper" style="padding-top: 150px; padding-bottom: 80px;">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            {{-- <div class="container home-page-secton-1 pt-1 pb-1 w-auto ps-5 pe-5 rounded-5"
                style="color:#FFD700 !important;"> --}}
            <div class="container home-page-secton-1 pt-1 pb-1 w-auto ps-5 pe-5 rounded-5"
                style="color:#ce4e79 !important;">
                <h3><b>OUR CUSTOMER STRATEGY</b></h3>
            </div>
        </div>
    </section>

    {{-- <section>
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
    </section> --}}

    <section class="section-2">
        <div class="container">
            <div class="row section-2-container">
                <div class="text-center section-2-heading">
                    <h4><b>CONVENIENCE, GREATER EFFICIENCY, ECONOMY</b></h4>
                </div>
                <div class="col-12 col-md-12 section-2-ul">
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
        </div>
    </section>
@endsection

@section('scripts')
@endsection
