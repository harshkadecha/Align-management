<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custome" style="">
    <div class="container-fluid">
        {{-- <a href="/" class="ps-4"><img src="{{ asset('images/logo/Picture2.png') }}" class="img-fluid img-responsive navbar-brand ps-4"
            style="width: 40%;"></a> --}}
        {{-- <img src="{{ asset('images/logo/Removal-979.png')}}" class="img-fluid img-responsive navbar-brand ps-4" style="height: 150px;"> --}}
        <a class="navbar-brand ps-4" href="{{route('home')}}"><img src="{{ asset('images/logo/Picture2.png') }}" class="img-fluid img-responsive navbar-brand ps-4 navbar-img-custome"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="35px" height="35px"><defs><linearGradient x1="12.066" y1="0.066" x2="34.891" y2="22.891" gradientUnits="userSpaceOnUse" id="color-1"><stop offset="0.237" stop-color="#ffd700"></stop><stop offset="0.85" stop-color="#ffd700"></stop></linearGradient><linearGradient x1="12.066" y1="12.066" x2="34.891" y2="34.891" gradientUnits="userSpaceOnUse" id="color-2"><stop offset="0.237" stop-color="#ffd700"></stop><stop offset="0.85" stop-color="#ffd700"></stop></linearGradient><linearGradient x1="12.066" y1="24.066" x2="34.891" y2="46.891" gradientUnits="userSpaceOnUse" id="color-3"><stop offset="0.237" stop-color="#ffd700"></stop><stop offset="0.85" stop-color="#ffd700"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M43,15h-38c-1.1,0 -2,-0.9 -2,-2v-2c0,-1.1 0.9,-2 2,-2h38c1.1,0 2,0.9 2,2v2c0,1.1 -0.9,2 -2,2z" fill="url(#color-1)"></path><path d="M43,27h-38c-1.1,0 -2,-0.9 -2,-2v-2c0,-1.1 0.9,-2 2,-2h38c1.1,0 2,0.9 2,2v2c0,1.1 -0.9,2 -2,2z" fill="url(#color-2)"></path><path d="M43,39h-38c-1.1,0 -2,-0.9 -2,-2v-2c0,-1.1 0.9,-2 2,-2h38c1.1,0 2,0.9 2,2v2c0,1.1 -0.9,2 -2,2z" fill="url(#color-3)"></path></g></g></svg></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-5 mb-3 mb-lg-5 text-end">
                <li class="nav-item">
                    <a class="nav-link active @if (\Request::route()->getName() == 'home') nav-link-active @endif" aria-current="page" href="{{route('home')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (\Request::route()->getName() == 'mission') nav-link-active @endif" aria-current="page" href="{{ route('mission') }}">MISSION</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link @if (\Request::route()->getName() == 'services') nav-link-active @endif" href="{{ route('services') }}">SERVICES</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">PAY YOUR BILL</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link @if (\Request::route()->getName() == 'repairs') nav-link-active @endif" href="{{ route('repairs') }}">REPAIRS</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link @if (\Request::route()->getName() == 'contact_us') nav-link-active @endif" href="{{ route('contact_us') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
