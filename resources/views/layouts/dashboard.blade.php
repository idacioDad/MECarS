<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    {{--Incluir os fichiros css--}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ asset('base-assets/dist-assets/css/themes/lite-purple.css') }}" rel="stylesheet" />
    <link href="{{ asset('base-assets/dist-assets/css/plugins/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('base-assets/dist-assets/css/plugins/fontawesome-5.css') }}" rel="stylesheet" />
    <link href="{{ asset('base-assets/dist-assets/css/plugins/metisMenu.min.css') }}" rel="stylesheet" />
    <link id="gull-theme" rel="stylesheet" href="{{asset('admin/styles/css/themes/lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/styles/vendor/perfect-scrollbar.css') }}">
    {{--Incluir os fichiros css--}}


</head>
<body class="text-left">

          <!-- ============ Compact Layout start ============= -->
        
          <div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple sidenav-open clearfix">
            <div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item  active"
                data-item="dashboard">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            
            <li class="nav-item " data-item="acessorios">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">Acessorios</span>
                </a>
                <div class="triangle"></div>
            </li>


            <li class="nav-item " data-item="carros">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Carros</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item " data-item="documentos">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart-5"></i>
                    <span class="nav-text">Documentos</span>
                </a>
                <div class="triangle"></div>
            </li>


            <li class="nav-item " data-item="fabricantes">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart-5"></i>
                    <span class="nav-text">Fabricantes</span>
                </a>
                <div class="triangle"></div>
            </li>

            
            <li class="nav-item " data-item="modelos">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart-5"></i>
                    <span class="nav-text">Modelos</span>
                </a>
                <div class="triangle"></div>
            </li>


            <li class="nav-item " data-item="parques">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart-5"></i>
                    <span class="nav-text">Parques</span>
                </a>
                <div class="triangle"></div>
            </li>


            <li class="nav-item " data-item="seguradoras">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart-5"></i>
                    <span class="nav-text">Seguradoras</span>
                </a>
                <div class="triangle"></div>
            </li>


            <li class="nav-item " data-item="trackers">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart-5"></i>
                    <span class="nav-text">Trackers</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="sessions">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Sessions</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="others">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Double-Tap"></i>
                    <span class="nav-text">Others</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">Doc</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <img src="../../assets/images/logo-text.png" alt="">
            </div>
        </header>
        <!-- Submenu Dashboards -->
        <div class="submenu-area" data-parent="dashboard">
            <header>
                <h6>Painel de Control</h6>
                
            </header>
            <ul class="childNav" data-parent="dashboard">
                <li class="nav-item ">
                    <a class=""
                        href="{{url('admin/index')}}">
                        <i class="nav-icon i-Clock-3"></i>
                        <span class="item-name">Painel Administrativo</span>
                    </a>
                </li>
                <li class="nav-item">
            </ul>
        </div>

        <div class="submenu-area" data-parent="acessorios">
            <header>
                <h6>Acessórios</h6>
                <p>Administração de Acessórios</p>
            </header>
            <ul class="childNav" data-parent="acessorios">

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/acessorios/index')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Lista de Acessórios</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/acessorios/create')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Adicionar Acessório </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="submenu-area" data-parent="carros">
            <header>
                <h6>Carros</h6>
                <p>Administração de Carros</p>
            </header>
            <ul class="childNav" data-parent="carros">

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/carros/index')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Lista de Carros</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/carros/create')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Adicionar Carros </span>
                    </a>
                </li>
            </ul>
        </div>
        
        
        <div class="submenu-area" data-parent="documentos">
            <header>
                <h6>Documentos</h6>
                <p>Administração de Documentos</p>
            </header>
            <ul class="childNav" data-parent="documentos">

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/documentos/index')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Lista de Documentos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/documentos/create')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Adicionar Documentos </span>
                    </a>
                </li>
            </ul>
        </div>

        
        <div class="submenu-area" data-parent="fabricantes">
            <header>
                <h6>Carros</h6>
                <p>Administração de Fabricantes</p>
            </header>
            <ul class="childNav" data-parent="fabricantes">

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/fabricantes/index')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Lista de Fabricantes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/fabricantes/create')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Adicionar Fabricantes </span>
                    </a>
                </li>
            </ul>
        </div>

        
        <div class="submenu-area" data-parent="modelos">
            <header>
                <h6>Modelos</h6>
                <p>Administração de Modelos</p>
            </header>
            <ul class="childNav" data-parent="modelos">

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/modelos/index')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Lista de Modelos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/modelos/create')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Adicionar Modelos </span>
                    </a>
                </li>
            </ul>
        </div>

        
        <div class="submenu-area" data-parent="parques">
            <header>
                <h6>Parques</h6>
                <p>Administração de Parques</p>
            </header>
            <ul class="childNav" data-parent="parques">

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/parques/index')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Lista de Parques</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/parques/create')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Adicionar Parques </span>
                    </a>
                </li>
            </ul>
        </div>

        
        <div class="submenu-area" data-parent="seguradoras">
            <header>
                <h6>Seguradoras</h6>
                <p>Administração de Seguradoras</p>
            </header>
            <ul class="childNav" data-parent="seguradoras">

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/seguadoras/index')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Lista de Seguradoras</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/seguradoras/create')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Adicionar Seguradoras </span>
                    </a>
                </li>
            </ul>
        </div>

        
        <div class="submenu-area" data-parent="trackers">
            <header>
                <h6>Carros</h6>
                <p>Administração de Trackers</p>
            </header>
            <ul class="childNav" data-parent="trackers">

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/trackers/index')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Lista de Trackers</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="{{url('admin/trackers/create')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Adicionar Trackers </span>
                    </a>
                </li>
            </ul>
        </div>
    
        <div class="submenu-area" data-parent="sessions">
            <header>
                <h6>Session Pages</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
            <ul class="childNav" data-parent="sessions">
                <li class="nav-item">
                    <a href="http://gull-html-laravel.ui-lib.com/sessions/signIn">
                        <i class="nav-icon i-Checked-User"></i>
                        <span class="item-name">Sign in</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://gull-html-laravel.ui-lib.com/sessions/signUp">
                        <i class="nav-icon i-Add-User"></i>
                        <span class="item-name">Sign up</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://gull-html-laravel.ui-lib.com/sessions/forgot">
                        <i class="nav-icon i-Find-User"></i>
                        <span class="item-name">Forgot</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="others">
            <header>
                <h6>Pages</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
            <ul class="childNav" data-parent="others">
                <li class="nav-item">
                    <a href="http://gull-html-laravel.ui-lib.com/others/notFound">
                        <i class="nav-icon i-Error-404-Window"></i>
                        <span class="item-name">Not Found</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/others/user-profile">
                        <i class="nav-icon i-Male"></i>
                        <span class="item-name">User Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/others/faq"
                        class="open">
                        <i class="nav-icon i-File-Horizontal"></i>
                        <span class="item-name">faq</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/others/starter"
                        class="open">
                        <i class="nav-icon i-File-Horizontal"></i>
                        <span class="item-name">Blank Page</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
            <!-- ============ end of left sidebar ============= -->


             <!-- ============ Body content start ============= -->
             <div class="main-content-wrap d-flex flex-column">
                <div class="main-header">
            <div class="logo">
                <img src="{{asset('assets/images/logo.png')}}" alt="">
            </div>

            <div class="menu-toggle">
                <div></div>
                        <div></div>
                <div></div>
            </div>

            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                                </p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                           
                                 <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="accordion.html">Accordion</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="badges.html">Badges</a></li>
                                    <li><a href="carousel.html">Carousels</a></li>
                                    <li><a href="lists.html">Lists</a></li>
                                    <li><a href="popover.html">Popover</a></li>
                                    <li><a href="tables.html">Tables</a></li>
                                    <li><a href="datatables.html">Datatables</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="nouislider.html">Sliders</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>

            <div style="margin: auto"></div>

            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Grid menu Dropdown -->
                <div class="dropdown widget_dropdown">
                    <i class="i-Safe-Box text-muted header-icon" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="menu-icon-grid">
                            <a href="#"><i class="i-Shop-4"></i> Home</a>
                            <a href="#"><i class="i-Library"></i> UI Kits</a>
                            <a href="#"><i class="i-Drop"></i> Apps</a>
                            <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                            <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                            <a href="#"><i class="i-Ambulance"></i> Support</a>
                        </div>
                    </div>
                </div>
              
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div  class="user col align-self-end">
                        <img src="../../assets/images/faces/1.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> Timothy Carlson
                            </div>
                            <a class="dropdown-item">Account settings</a>
                            <a class="dropdown-item">Billing history</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">SAIR</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- header top menu end -->

                <!-- ============ end of header menu ============= -->
                <div class="main-content">
                               <div class="breadcrumb">
               
                <ul>
                   

            @yield('content')



            <div class="customizer">
    <div class="handle" (click)="isOpen = !isOpen">
        <i class="i-Gear spin"></i>
    </div>
    <div class="customizer-body" data-perfect-scrollbar data-suppress-scroll-x="true">
        <div class="accordion" id="accordionCustomizer">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <p class="mb-0">
                        Sidebar Layout
                    </p>
                </div>


    {{--Incluir os fichiros js--}}
    <script src="{{ asset('base-assets/dist-assets/js/plugins/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/scripts/script.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/scripts/script_2.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/scripts/sidebar.large.script.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/plugins/metisMenu.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/scripts/layout-sidebar-vertical.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/plugins/echarts.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/scripts/echart.options.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/plugins/datatables.min.js') }}"></script>
    <script src="{{ asset('base-assets/dist-assets/js/scripts/dashboard.v2.script.min.js') }}"></script>
</body>
</html>
