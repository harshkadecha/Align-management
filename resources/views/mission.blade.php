@extends('layout.main')

@section('title')
    Our Mission
@endsection

@section('description')
    Align Management is a property management company that manages residential and commercial properties.
@endsection

@section('meta')
    <meta name="keywords"
        content="Align management, align management, residential and commercial properties, residential and commercial properties, residential properties, commercial properties, properties, manages residential and commercial properties" />
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
    <section class="content-wrapper" style="padding-top: 250px; padding-bottom: 150px;">
        <div class="container text-center d-flex align-items-center justify-content-center section-1-wrapper">
            <div class="container home-page-secton-1 pt-1 pb-1 w-auto ps-5 pe-5 rounded-5" style="color:#FFD700 !important;">
                <h3>MISSION</h3>
            </div>
        </div>
    </section>

    {{-- section-2 content --}}
    <section>
        <div class="section-2 pb-5 text-center pt-5 md:ps-10 ls:ps-10 xl:ps-10 md:pe-10 lg:pe-10 section-2-mission">
            <p class="mission-paragraph">Align Management LLC is a boutique, Harlem based, property management, real estate
                and facilities management firm. Our mission is to provide safe, affordable, and well-maintained housing for
                individuals and families throughout the New York State area and its multi-faceted, multi-cultural and
                economically diversified communities. Our services include condominium, co-operative, retail and affordable
                housing property management. Moreover, we have a seasoned and strong facilities management team that
                provides project management to building specific capital improvement projects, monitor and assess the
                existing buildings to identify ways to reduce operating costs, as well as assist the maintenance staff in
                recognizing and implementing preventative maintenance measures. Additionally, we partner with an affiliate
                company to provide maintenance and janitorial support, if required, to ensure that our client’s structures
                are preserved. We are dedicated to serving our varied tenancy by offering quality services that meet
                building needs and exceed our client’s expectations. Through our commitment to integrity, transparency, and
                tenant satisfaction, we aim to create thriving and inclusive communities where everyone has access to a
                secure and comfortable place to call home. We strive to make a positive impact by promoting housing
                affordability, fostering community engagement, encouraging home ownership and advocating for equitable
                housing opportunities. Our mission is driven by our passion for social responsibility and our belief that
                everyone deserves a place to live with dignity and pride.</p>
    </div>
    </section>

@endsection

@section('scripts')
@endsection
