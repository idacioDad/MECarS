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
            <li class="nav-item " data-item="uikits">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">UI kits</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="extrakits">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Suitcase"></i>
                    <span class="nav-text">Extra kits</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <div class="triangle"></div>
            </li>


            <li class="nav-item " data-item="forms">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item " data-item="charts">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart-5"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <div class="triangle"></div>
            </li>


            <li class="nav-item ">
                <a class="nav-item-hold" href="http://gull-html-laravel.ui-lib.com/datatables/basic-tables">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="nav-text">Datatables</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="sessions">
                <a class="nav-item-hold" href="http://gull-html-laravel.ui-lib.com/test.html">
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
                <h6>Dashboards</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
            <ul class="childNav" data-parent="dashboard">
                <li class="nav-item ">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/dashboard/dashboard1">
                        <i class="nav-icon i-Clock-3"></i>
                        <span class="item-name">Version 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://gull-html-laravel.ui-lib.com/dashboard/dashboard2"
                        class="">
                        <i class="nav-icon i-Clock-4"></i>
                        <span class="item-name">Version 2</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/dashboard/dashboard3">
                        <i class="nav-icon i-Over-Time"></i>
                        <span class="item-name">Version 3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/dashboard/dashboard4">
                        <i class="nav-icon i-Clock"></i>
                        <span class="item-name">Version 4</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="forms">
            <header>
                <h6>Forms</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
            <ul class="childNav" data-parent="forms">

                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/forms/forms-basic">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Basic Elements</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/forms/basic-action-bar">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Basic action bar </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/forms/form-layouts">
                        <i class="nav-icon i-Split-Vertical"></i>
                        <span class="item-name">Form Layouts</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/forms/multi-column-forms">
                        <i class="nav-icon i-Split-Vertical"></i>
                        <span class="item-name">Multi column forms</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/forms/form-input-group">
                        <i class="nav-icon i-Receipt-4"></i>
                        <span class="item-name">Input Groups</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/forms/form-validation">
                        <i class="nav-icon i-Close-Window"></i>
                        <span class="item-name">Form Validation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/forms/smartWizard">
                        <i class="nav-icon i-Width-Window"></i>
                        <span class="item-name">Smart Wizard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/forms/tagInput">
                        <i class="nav-icon i-Tag-2"></i>
                        <span class="item-name">Tag Input</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/forms/form-editor">
                        <i class="nav-icon i-Pen-2"></i>
                        <span class="item-name">Rich Editor</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="submenu-area" data-parent="charts">
            <header>
                <h6>Charts</h6>
                <p>Lists of useable charts</p>
            </header>
            <ul class="childNav" data-parent="charts">
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/charts/echarts"
                        title='charts'>
                        <i class="nav-icon i-Bar-Chart-2"></i>
                        <span class="item-name">echarts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/charts/chartjs">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">ChartJs</span>
                    </a>
                </li>



                <li class="nav-item dropdown-sidemenu">
                    <a>
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Apex Charts</span>
                        <i class="dd-arrow i-Arrow-Down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexAreaCharts">Area Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexBarCharts">Bar Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexBubbleCharts">Bubble Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexColumnCharts">Column Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexCandleStickCharts">CandleStick Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexLineCharts">Line Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexMixCharts">Mix Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexPieDonutCharts">PieDonut Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexRadarCharts">Radar Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexRadialBarCharts">RadialBar Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexScatterCharts">Scatter Charts</a></li>
                        <li><a class=""
                                href="http://gull-html-laravel.ui-lib.com/charts/apexSparklineCharts">Sparkline Charts</a></li>

                    </ul>
                </li>


            </ul>
        </div>

        <div class="submenu-area" data-parent="apps">
            <header>
                <h6>Apps</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
            <ul class="childNav" data-parent="apps">

                <li class="nav-item dropdown-sidemenu">
                    <a>
                        <i class="nav-icon i-Receipt"></i>
                        <span class="item-name">Task Manager <span
                                class=" ml-2 badge badge-pill badge-danger">New</span></span>
                        <i class="dd-arrow i-Arrow-Down"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/task-manager">
                                <i class="nav-icon i-Receipt"></i>
                                <span class="item-name">Task manager</span>
                            </a>
                        </li>
                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/task-manager-list">
                                <i class="nav-icon i-Receipt-4"></i>
                                <span class="item-name">Task manager list</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="http://gull-html-laravel.ui-lib.com/apps/toDo">
                                <i class="nav-icon i-Receipt-4"></i>
                                <span class="item-name">Minimal ToDo</span>
                            </a>
                        </li>
                        <li></li>
                    </ul>
                </li>

                <li class="nav-item dropdown-sidemenu">
                    <a>
                        <i class="nav-icon i-Cash-Register"></i>
                        <span class="item-name">Ecommerce <span
                                class=" ml-2 badge badge-pill badge-danger">New</span></span>
                        <i class="dd-arrow i-Arrow-Down"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/ecommerce/products">
                                <i class="nav-icon i-Shop-2"></i>
                                <span class="item-name">Products</span>
                            </a>
                        </li>


                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/ecommerce/product-details">
                                <i class="nav-icon i-Tag-2"></i>
                                <span class="item-name">Product Details</span>
                            </a>
                        </li>
                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/ecommerce/cart">
                                <i class="nav-icon i-Add-Cart"></i>
                                <span class="item-name">Cart</span>
                            </a>
                        </li>

                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/ecommerce/checkout">
                                <i class="nav-icon i-Cash-register-2"></i>
                                <span class="item-name">Checkout</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown-sidemenu">
                    <a>
                        <i class="nav-icon i-Business-ManWoman"></i>
                        <span class="item-name">Contacts<span
                                class=" ml-2 badge badge-pill badge-danger">New</span></span>
                        <i class="dd-arrow i-Arrow-Down"></i>
                    </a>
                    <ul class="submenu">

                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/contacts/contact-list-table">
                                <i class="nav-icon i-Business-Mens"></i>
                                <span class="item-name">Contact Table
                                    
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/contacts/lists">
                                <i class="nav-icon i-Business-Mens"></i>
                                <span class="item-name">Contact Lists</span>
                            </a>
                        </li>
                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/contacts/grid">
                                <i class="nav-icon i-Conference"></i>
                                <span class="item-name">Contact Grid</span>
                            </a>
                        </li>
                        <li>
                            <a class=""
                                href="http://gull-html-laravel.ui-lib.com/apps/contacts/contact-details">
                                <i class="nav-icon i-Find-User"></i>
                                <span class="item-name">Contact Details</span>
                            </a>
                        </li>



                    </ul>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/apps/invoice">
                        <i class="nav-icon i-Add-File"></i>
                        <span class="item-name">Invoice</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/apps/inbox">
                        <i class="nav-icon i-Email"></i>
                        <span class="item-name">Inbox</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/apps/chat">
                        <i class="nav-icon i-Speach-Bubble-3"></i>
                        <span class="item-name">Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/apps/calendar">
                        <i class="nav-icon i-Calendar-4"></i>
                        <span class="item-name">Calendar</span>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="submenu-area" data-parent="extrakits">
            <header>
                <h6>Extra Kits</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
            <ul class="childNav" data-parent="extrakits">
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/extrakits/dropDown">
                        <i class="nav-icon i-Arrow-Down-in-Circle"></i>
                        <span class="item-name">Dropdown</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/extrakits/imageCroper">
                        <i class="nav-icon i-Crop-2"></i>
                        <span class="item-name">Image Cropper</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/extrakits/loader">
                        <i class="nav-icon i-Loading-3"></i>
                        <span class="item-name">Loaders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/extrakits/laddaButton">
                        <i class="nav-icon i-Loading-2"></i>
                        <span class="item-name">Ladda Buttons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/extrakits/toastr">
                        <i class="nav-icon i-Bell"></i>
                        <span class="item-name">Toastr</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/extrakits/sweetAlert">
                        <i class="nav-icon i-Approved-Window"></i>
                        <span class="item-name">Sweet Alerts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/extrakits/tour">
                        <i class="nav-icon i-Plane"></i>
                        <span class="item-name">User Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/extrakits/upload">
                        <i class="nav-icon i-Data-Upload"></i>
                        <span class="item-name">Upload</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="uikits">
            <header>
                <h6>UI Kits</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
            <ul class="childNav" data-parent="uikits">
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/alerts">
                        <i class="nav-icon i-Bell1"></i>
                        <span class="item-name">Alerts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/accordion">
                        <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                        <span class="item-name">Accordion</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/badges">
                        <i class="nav-icon i-Medal-2"></i>
                        <span class="item-name">Badges</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/buttons">
                        <i class="nav-icon i-Cursor-Click"></i>
                        <span class="item-name">Buttons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/uikits/bootstrap-tab">
                        <i class="nav-icon i-Cursor-Click"></i>
                        <span class="item-name">Bootstrap tab</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/cards">
                        <i class="nav-icon i-Line-Chart-2"></i>
                        <span class="item-name">Cards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/uikits/cards-metrics">
                        <i class="nav-icon i-ID-Card"></i>
                        <span class="item-name">Card Metrics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/carousel">
                        <i class="nav-icon i-Video-Photographer"></i>
                        <span class="item-name">Carousels</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/lists">
                        <i class="nav-icon i-Belt-3"></i>
                        <span class="item-name">Lists</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/uikits/pagination">
                        <i class="nav-icon i-Arrow-Next"></i>
                        <span class="item-name">Paginations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/popover">
                        <i class="nav-icon i-Speach-Bubble-2"></i>
                        <span class="item-name">Popover</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/uikits/progressbar">
                        <i class="nav-icon i-Loading"></i>
                        <span class="item-name">Progressbar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/tables">
                        <i class="nav-icon i-File-Horizontal-Text"></i>
                        <span class="item-name">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/tabs">
                        <i class="nav-icon i-New-Tab"></i>
                        <span class="item-name">Tabs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/tooltip">
                        <i class="nav-icon i-Speach-Bubble-8"></i>
                        <span class="item-name">Tooltip</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="" href="http://gull-html-laravel.ui-lib.com/uikits/modals">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Modals</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=""
                        href="http://gull-html-laravel.ui-lib.com/uikits/NoUislider">
                        <i class="nav-icon i-Width-Window"></i>
                        <span class="item-name">Sliders</span>
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
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="#"><i class="i-Drop"></i> Apps</a>
                                    <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="#"><i class="i-Ambulance"></i> Support</a>
                                </div>
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
                    <li><a href="#">Dashboard</a></li>
                    
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            @yield('content')




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
