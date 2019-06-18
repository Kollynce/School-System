<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>School System</title>
       <link rel="icon" href="/img/brand/favicon.png" type="image/png">
         <!-- Fonts -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
         <!-- Icons -->
         <link rel="stylesheet" href="/vendor/nucleo/css/nucleo.css" type="text/css">
         <link rel="stylesheet" href="/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
         <!-- script -->
         <script src="{{ asset('js/app.js') }}" defer></script>
         <!-- Argon CSS -->
         <link rel="stylesheet" href="/css/argon.min9f1e.css?v=1.1.0" type="text/css">
    </head>
    <body>
        <!--------------------------------------- nav ------------------------------------>
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="pages/dashboards/dashboard.html">
                    <img src="{{ asset('img/PIU-Logo.jpg') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="pages/dashboards/dashboard.html">
                                    <img src="assets/img/brand/blue.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-link-inner--text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-link-inner--text">About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-link-inner--text">Contact</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-link-inner--text">Register</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="nav-link-inner--text">Lock</span>
                            </a>
                        </li>
                    </ul>
                    <hr class="d-lg-none">
                    @guest
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto" data-toggle="modal" data-target="#modal-form">
                        <li class="nav-item d-none d-lg-block ml-lg-4">
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-user mr-2"></i>
                                </span>
                                <span class="nav-link-inner--text">Login</span>
                            </a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                                  <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                          <img alt="Image placeholder" src="/img/theme/team-4.jpg">
                                        </span>
                                        <div class="media-body ml-2 d-none d-lg-block">
                                          <span class="mb-0 text-sm  font-weight-bold">kryme</span>
                                        </div>
                                      </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome!</h6>
                                      </div>
                                      <a href="#!" class="dropdown-item">
                                        <i class="ni ni-single-02"></i>
                                        <span>My profile</span>
                                      </a>
                                      <a href="/layouts.dashboard" class="dropdown-item">
                                        <i class="ni ni-shop"></i>
                                        <span>Dashboard</span>
                                      </a>
                                      <a href="#!" class="dropdown-item">
                                        <i class="ni ni-calendar-grid-58"></i>
                                        <span>Activity</span>
                                      </a>
                                      <a href="#!" class="dropdown-item">
                                        <i class="ni ni-support-16"></i>
                                        <span>Support</span>
                                      </a>
                                      <div class="dropdown-divider"></div>
                                      <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">

                                        <i class="ni ni-user-run"></i>
                                        <span>Logout</span>
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                    </div>
                                  </li>
                                </ul>
                    @endguest
                </div>
            </div>
        </nav>
        @include('auth.login')
        <!--------------------------------------- nav ------------------------------------>


        <script src="/vendor/jquery/dist/jquery.min.js"></script>
        <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/vendor/js-cookie/js.cookie.js"></script>
        <script src="/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="/js/argon.min9f1e.js?v=1.1.0"></script>
        <!-- Demo JS - remove this in your project -->
        <script src="/js/demo.min.js"></script>
    </body>
</html>