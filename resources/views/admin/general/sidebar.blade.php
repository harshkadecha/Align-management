<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="">
                    <span class="brand-logo">
                        {{-- <img src="{{ asset('images/logo/hd logo -06-06.jpg') }}"
                        alt="" class="img-fluid"> --}}
                    </span>
                    <h3 class="brand-text" style="color: var(--primary-color)">
                        <img src="{{ asset('images/logo/Picture2.png') }}" alt=""
                            class="text-center" style="margin: auto;position: relative;left: 21%;width: 130px;">

                    </h3>

                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i>
                </a>
            </li>

        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="@if (Request::segment(2) == 'dashboard') active @endif nav-item">
                <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                    <i data-feather='airplay'></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>
            <li class="@if (Request::segment(1) == 'email' || Request::segment(2) == 'eamil-create')  @endif nav-item">
                {{-- <a class="d-flex align-items-center" href="{{ route('email-logs.index') }} "> --}}
                    <a class="d-flex align-items-center" href="#">
                    <i data-feather='mail'></i>
                    <span class="menu-title text-truncate" data-i18n="User">Email</span>
                </a>
                <ul class="menu-content">
                    <li class=" @if (Request::segment(1) == 'email-logs') active @endif   ">
                        <a class="d-flex align-items-center" href="{{ route('email-logs.index') }} ">
                            <i data-feather='server'></i>
                            <span class="menu-title text-truncate" data-i18n="User">Email Logs</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->
