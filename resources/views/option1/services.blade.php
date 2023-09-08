@extends('layout.main')

@section('title')
    Services
@endsection

@section('description')
    Align Management is a property management company that manages residential and commercial properties.
@endsection

@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <style>

    </style>
@endsection

@section('meta')
    <meta name="keywords"
        content="services, home services, Align management services, align management, residential and commercial properties, residential and commercial properties, residential properties, commercial properties, properties, manages residential and commercial properties" />
@endsection

@section('content')
    {{-- section-1 content --}}
    {{-- <section class="content-wrapper" style="padding-top: 250px; padding-bottom: 80px;">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 p-5" style="color:black;">
                <h3>SERVICING THE NEW YORK TRISTATE AREA, WESTCHESTER COUNTY, RICHMOND COUNTY AND NEW JERSEY.</h3>
            </div>
        </div>
    </section> --}}
    <section class="content-wrapper ">
        <div class="text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="row services-page-header-section">
                <div class="col-xl-6 col-6 col-sm-6 ">
                    <div class="pt-1 pb-1 w-auto lg:ps-5 xl:ps-5 md:ps-5 sm:ps-0 pe-5" style="color:#FFD700 !important;">
                        <h1 class="ps-5">Services.</h1>
                    </div>
                </div>
                <div class="col-6 col-xl-4 col-sm-6 d-flex text-left align-items-center lg:me-5 xl:me-5 md:me-5" style="text-align: left;">
                    Venture provides research-backed solutions, thorough inspections, efficient corrective measures, and
                    transparent communication to ensure the success of your property investment.
                </div>
            </div>
        </div>

        {{-- section-2 content --}}
        <section>
            <div class="section-2 pb-5">
                <div>
                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">1</span> <span>PLUMBING</span> <span
                                    class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample1">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed
                            when the
                            user activates the relevant trigger.
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">2</span> <span>ELECTRIC</span> <span
                                    class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>

                    <div class="collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed
                            when the
                            user activates the relevant trigger.
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">3</span> <span>HVAC</span> <span
                                    class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>

                    <div class="collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed
                            when the
                            user activates the relevant trigger.
                        </div>
                    </div>

                    <button class="services-tab m-0 p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">4</span> <span>APPLIANCE REPAIR</span> <span
                                    class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>

                    <div class="collapse" id="multiCollapseExample4">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed
                            when the
                            user activates the relevant trigger.
                        </div>
                    </div>
                    <button class="services-tab m-0 p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample5" aria-expanded="false"
                        aria-controls="multiCollapseExample5">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">5</span> <span>GENERAL REPAIRS</span>
                                <span class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>

                    <div class="collapse" id="multiCollapseExample5">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed
                            when the
                            user activates the relevant trigger.
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample6" aria-expanded="false"
                        aria-controls="multiCollapseExample6">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">6</span> <span>OTHER REPAIRS</span> <span
                                    class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>

                    <div class="collapse" id="multiCollapseExample6">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed
                            when the
                            user activates the relevant trigger.
                        </div>
                    </div>


                </div>

            </div>

        </section>
    </section>
@endsection

@section('scripts')
@endsection
