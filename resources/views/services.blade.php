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
    @include('general.header')

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
            <div class="row services-page-header-section p-0 m-0" style="">
                <div class="col-xl-6 col-6 col-sm-12 ">
                    <div class="pt-1 pb-1 w-auto lg:ps-5 xl:ps-5 md:ps-5 sm:ps-0 pe-5" style="color:#FFD700 !important;">
                        <h1 class="ps-5">Services</h1>
                    </div>
                </div>
                <div class=" col-xl-4 col-sm-12 d-flex text-left align-items-center lg:me-5 xl:me-5 md:me-5"
                    style="text-align: left;">
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
                            <p class=""> <span class="services-span-left">01</span> <span
                                    class="text-center w-100">Tenant Acquisition</span> <span
                                    class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample1">
                        <div class="card card-body">
                            <div class="container">Advertising and marketing vacant rental properties, conducting property
                                showings, screening potential tenants, and executing residential and retail lease
                                agreements.
                                Align Management (AM) is responsible for verifying and approving applications from
                                prospective
                                tenants based on eligibility requirements. This includes verifying income levels, conducting
                                background checks, and ensuring compliance with any specific program criteria.</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">02</span> <span class="text-center w-100">Rent Collection</span> <span
                                    class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>

                    <div class="collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            <div class="container">Collecting monthly rent payments from tenants, online rent payment
                                availability, issuing of receipts, and enforcing late payment policies.</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">03</span> <span class="text-center w-100">Lease Administration</span>
                                <span class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>

                    <div class="collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                            <div class="container">Managing residential and retail lease agreements, renewals and
                                terminations. AM’s responsibilities extend to the enforcement of lease policies, limitations
                                and
                                adherences. And AM is acquainted with conducting move-in and move-out inspections and any
                                related administrative tasks associated with apartment and commercial space turnovers.</div>
                        </div>
                    </div>

                    <button class="services-tab m-0 p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">04</span> <span class="text-center w-100">Maintenance and
                                    Repairs</span> <span class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="50" height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>

                    <div class="collapse" id="multiCollapseExample4">
                        <div class="card card-body">
                            <div class="container">Coordinating and overseeing routine maintenance work orders from start
                                to finish. This includes addressing tenant repair requests, scheduling repairs, coordinating
                                with maintenance staff/contractors/vendors and ensuring timely resolution of work orders.
                            </div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample5" aria-expanded="false"
                        aria-controls="multiCollapseExample5">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">05</span> <span class="text-center w-100">Property
                                    Inspections</span> <span class="services-span-right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                        class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample5">
                        <div class="card card-body">
                            <div class="container">Conducting regular inspections of the property to assess its condition
                                and identify any essential minor or major repairs/upgrades/overhauls required.</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample6" aria-expanded="false"
                        aria-controls="multiCollapseExample6">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">06</span> <span class="text-center w-100">Financial
                                    Management</span> <span class="services-span-right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                        class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample6">
                        <div class="card card-body">
                            <div class="container">AM handles financial aspects such as budgeting, accounting, and
                                financial reporting for all residential and retail properties. This includes managing
                                operating expenses, coordinating with accounting professionals, insurance requirements,
                                taxes and preparing financial statements for property owners and regulatory agencies.</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample7" aria-expanded="false"
                        aria-controls="multiCollapseExample7">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">07</span> <span class="text-center w-100" >Legal Compliance</span>
                                <span class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample7">
                        <div class="card card-body">
                            <div class="container">Staying up-to-date with local, state, and federal regulations pertaining
                                to rental properties, ensuring compliance with housing laws, fair housing regulations, Board
                                of Directors and handling eviction processes as required.</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample8" aria-expanded="false"
                        aria-controls="multiCollapseExample8">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">08</span> <span class="text-center w-100">Compliance with Regulatory
                                    Agencies</span> <span class="services-span-right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                        class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample8">
                        <div class="card card-body">
                            <div class="container">AM ensures compliance with relevant local, state, and federal regulatory
                                agencies, such as income certifications, affordable housing regulations and other program
                                guidelines. </div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample9" aria-expanded="false"
                        aria-controls="multiCollapseExample9">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">09</span> <span class="text-center w-100">Tenant Services and
                                    Support</span> <span class="services-span-right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                        class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample9">
                        <div class="card card-body">
                            <div class="container">AM provides support services to tenants, including addressing their
                                inquiries, concerns, and requests. An immense effort is made to facilitate and improve
                                communication between tenants and property management. Moreover, Align Management
                                understands the challenges that many tenants have with language barriers, technology and
                                basic knowledge of the multiple programs/medical benefits/human administration
                                resources/social services components that are available but rarely known by the population
                                we service, which is why AM offers assistance in identifying and accessing non-profit
                                community and government resources. Additionally, we pride ourselves in organizing
                                educational, fun and engaging resident activities that promotes physical and mental health
                                betterment. By extending our support, information, and representation, we strive to
                                establish a more equitable assistance system for residents who require advocacy. </div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample10" aria-expanded="false"
                        aria-controls="multiCollapseExample10">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">10</span> <span class="text-center w-100">Property Marketing and
                                    Occupancy</span> <span class="services-span-right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                        class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample10">
                        <div class="card card-body">
                            <div class="container">Developing and implementing effective marketing strategies, utilizing
                                online listings, social media platforms and other advertising channels to attract
                                prospective market rate residential tenants, retail tenants and prospective co-op and condo
                                owners. AM is, also, involved in marketing affordable housing units to potential tenants,
                                maintaining waiting lists, and coordinating the application and selection process for vacant
                                units.</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample11" aria-expanded="false"
                        aria-controls="multiCollapseExample11">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">11</span> <span class="text-center w-100">Emergency Response</span>
                                <span class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample11">
                        <div class="card card-body">
                            <div class="container">Providing a 24/7 emergency hotline for tenants to report urgent issues
                                and coordinating prompt responses to emergencies such as water leaks, electrical problems,
                                or security concerns.</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample12" aria-expanded="false"
                        aria-controls="multiCollapseExample12">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">12</span> <span class="text-center w-100">Property Insurance</span>
                                <span class="services-span-right"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                        height="50" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample12">
                        <div class="card card-body">
                            <div class="container">Assisting residential and commercial property owners in obtaining
                                appropriate insurance coverage for their properties, including liability insurance and
                                property damage coverage.</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample13" aria-expanded="false"
                        aria-controls="multiCollapseExample13">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">13</span> <span class="text-center w-100">Financial Analysis and
                                    Reporting</span> <span class="services-span-right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                        class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample13">
                        <div class="card card-body">
                            <div class="container">Conducting market research and analysis to determine optimal rental
                                rates, advising property owners on construction loan strategies, and providing regular
                                reports on property performance</div>
                        </div>
                    </div>

                    <button class="services-tab p-0 m-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample14" aria-expanded="false"
                        aria-controls="multiCollapseExample14">
                        <div class="service-img">
                            <p class=""> <span class="services-span-left">14</span> <span class="text-center w-100" >Software
                                    Utilization</span> <span class="services-span-right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                        class="bi bi-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg></span></p>
                        </div>
                    </button>
                    <div class="collapse " id="multiCollapseExample14">
                        <div class="card card-body">
                            <div class="container">RealPage is an innovative and comprehensive program that serves as an
                                invaluable asset to property management. With its advanced features and user-friendly
                                interface, RealPage revolutionizes the way we handle operations. This software streamlines
                                various aspects of property management, including leasing, accounting, maintenance, and
                                marketing. The software enables tenant screening, rent collection, and communication with
                                residents. RealPage also provides detailed reporting capabilities and optimizes the
                                respective portfolio performances. RealPage, also, enhances the building’s operational
                                efficiency and maximizes revenue.</div>
                        </div>
                    </div>



                </div>

            </div>

        </section>
    </section>
@endsection

@section('scripts')
@endsection
