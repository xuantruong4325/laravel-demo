<!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset='utf-8'>
        <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
        <!-- css ms -->
        <link rel="stylesheet" type="text/css" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css') }}">
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.min.css') }}" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-GBZ3SGGX85");
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js"
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
        </script>
        <!-- End Google Tag Manager -->
    </head>
</head>

<body>


    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here" />
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">

                    </div>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="{{ asset('vendors/images/test.jpg') }}" alt="" />
                        </span>
                        <span class="user-name">{{Auth::user()->name}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{route('logout')}}"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
            <div class="github-link">
                <a href="https://github.com/dropways/deskapp" target="_blank"><img src="{{ asset('vendors/images/github.svg') }}" alt="" /></a>
            </div>
        </div>
    </div>
    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
    </div>

    <div class="left-side-bar sidebar-light">
        <div class="brand-logo">
            <a href="#">
                <img src="{{ asset('vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo" />
                <img src="{{ asset('vendors/images/deskapp-logo-white.svg') }}" alt="" class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            <span class="mtext">Tài khoản</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{  route('Admin')  }}">admin</a></li>
                            <li><a href="{{  route('User')  }}">user</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            <span class="mtext">Nội dung</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{  route('listCategory')  }}">Loại sản phẩm</a></li>
                            <li><a href="{{  route('listCompany')  }}">Hãng</a></li>
                            <li><a href="{{  route('ndindex')  }}">Sản phẩm</a></li>
                            <li><a href="{{  route('listTechnique')  }}">Thông số kỹ thuật</a></li>
                            <li><a href="{{  route('ndbanner')  }}">Footer và Banner</a></li>
                            <li><a href="#">Header</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    <!--main-->
    @yield('main')

    <!-- welcome modal end -->
    <!-- jquery -->
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>

    <!-- js ms -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js') }}"></script>
    <!-- js -->
    <script src="{{ asset('vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- buttons for Export datatable -->
    <script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
    <!-- Datatable Setting js -->
    <script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>