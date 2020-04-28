<!DOCTYPE html>
<html lang="fa">


<head>
    <meta charset="UTF-8">
    <title>Negareh CMS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{url('admin/css/directionRTL.css')}}">
    <link rel="stylesheet" href="{{url('admin/font/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('admin/font/fontawesome-free-5.1.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/vendor/bootstrap.min.css')}}">
    <!--<link rel="stylesheet" href="{{url('admin/css/vendor/fullcalendar.min.css')}}">-->
    <!--<link rel="stylesheet" href="{{url('admin/css/persian-datepicker.min.css')}}"> -->
    <link rel="stylesheet" href="{{url('admin/css/vendor/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/vendor/datatables.responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/vendor/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/vendor/bootstrap-stars.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/vendor/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/vendor/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/main.css')}}">

</head>

<body id="app-container" class="menu-default">

<nav class="navbar fixed-top">


<div class="search" data-search-path="Layouts.Search03d2.html?q=">
    <input placeholder="جستجو...">
    <span class="search-icon">
        <i class="flaticon-search4"></i>
    </span>
</div>

<a class="navbar-logo" href="{{route('admin.dashboard')}}">
    <span class="logo d-none d-xs-block"></span>
    <span class="logo-mobile d-block d-xs-none"></span>
</a>

<div class="ml-auto">
    <div class="header-icons d-inline-block align-middle">

        <div class="position-relative d-none d-sm-inline-block">
            <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flaticon-shapes-1"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="iconMenuDropdown">
                <a href="#" class="icon-menu-item">
                    <i class="flaticon-settings d-block"></i>
                    <span>تنظیمات</span>
                </a>

                <a href="#" class="icon-menu-item">
                    <i class="flaticon-user-1 d-block"></i>
                    <span>کاربران</span>
                </a>

                <a href="#" class="icon-menu-item">
                    <i class="flaticon-game d-block"></i>
                    <span>احزاء</span>
                </a>

                <a href="#" class="icon-menu-item">
                    <i class="flaticon-profits d-block"></i>
                    <span>سود</span>
                </a>

                <a href="#" class="icon-menu-item">
                    <i class="flaticon-document d-block"></i>
                    <span>نظرسنجی</span>
                </a>

                <a href="#" class="icon-menu-item">
                    <i class="flaticon-suitcase d-block"></i>
                    <span>نظرسنجی</span>
                </a>

            </div>
        </div>

        <div class="position-relative d-inline-block">
            <button class="header-icon btn btn-empty" type="button" id="notificationButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flaticon-music"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right mt-3 scroll position-absolute" id="notificationDropdown">

                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                    <a href="#">
                        <img src="{{url('admin/img/profile-pic-l-2.jpg')}}" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle">
                    </a>
                    <div class="pr-3 pl-2">
                        <a href="#">
                            <p class="font-weight-medium mb-1">علی علیزاده فقط نظر جدیدی ارسال کرد!</p>
                            <p class="text-muted mb-0 text-small"><span class="numberltr">09.04.2018 - 12:45</span></p>
                        </a>
                    </div>
                </div>

                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                    <a href="#">
                        <img src="{{url('admin/img/notification-thumb.jpg')}}" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle">
                    </a>
                    <div class="pr-3 pl-2">
                        <a href="#">
                            <p class="font-weight-medium mb-1">1 مورد موجود نیست!</p>
                            <p class="text-muted mb-0 text-small"><span class="numberltr">09.04.2018 - 12:45</span></p>
                        </a>
                    </div>
                </div>


                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                    <a href="#">
                        <img src="{{url('admin/img/notification-thumb-2.jpg')}}" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle">
                    </a>
                    <div class="pr-3 pl-2">
                        <a href="#">
                            <p class="font-weight-medium mb-1">سفارش جدید دریافت شد این مجموع 147،20 دلار است.</p>
                            <p class="text-muted mb-0 text-small"><span class="numberltr">09.04.2018 - 12:45</span></p>
                        </a>
                    </div>
                </div>

                <div class="d-flex flex-row mb-3 pb-3">
                    <a href="#">
                        <img src="{{url('admin/img/notification-thumb-3.jpg')}}" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle">
                    </a>
                    <div class="pr-3 pl-2">
                        <a href="#">
                            <p class="font-weight-medium mb-1">3 مورد فقط توسط یک کاربر به لیست دلخواه اضافه شده است!</p>
                            <p class="text-muted mb-0 text-small"><span class="numberltr">09.04.2018 - 12:45</span></p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
            <i class="flaticon-fullscreen"></i>
            <i class="flaticon-normalscreen"></i>
        </button>

    </div>

    <div class="user d-inline-block">
        <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="name">سارا احمدی</span>
            <span>
                <img alt="Profile Picture" src="{{url('admin/img/profile-pic-l.jpg')}}">
            </span>
        </button>

        <div class="dropdown-menu dropdown-menu-right mt-3">
            <a class="dropdown-item" href="#">پروفایل</a>
            <a class="dropdown-item" href="#">کاربران</a>
            <a class="dropdown-item" href="#">ورود ناموفق</a>
            <a class="dropdown-item" href="#">خروج</a>
        </div>
    </div>
</div>
<a href="#" class="menu-button d-none d-md-block">
    <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
        <rect x="0.48" y="0.5" width="7" height="1" />
        <rect x="0.48" y="7.5" width="7" height="1" />
        <rect x="0.48" y="15.5" width="7" height="1" />
    </svg>
    <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
        <rect x="1.56" y="0.5" width="16" height="1" />
        <rect x="1.56" y="7.5" width="16" height="1" />
        <rect x="1.56" y="15.5" width="16" height="1" />
    </svg>
</a>

<a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
        <rect x="0.5" y="0.5" width="25" height="1" />
        <rect x="0.5" y="7.5" width="25" height="1" />
        <rect x="0.5" y="15.5" width="25" height="1" />
    </svg>
</a>
</nav>






<div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="#dashboard">
                            <i class="flaticon-profits"></i>
                            <span>داشبورد</span>
                        </a>
                    </li>
                    <li>
                        <a href="#layouts">
                            <i class="flaticon-document"></i> محتوا
                        </a>
                    </li>
                    <li>
                        <a href="#applications">
                            <i class="flaticon-business-1"></i> فروشگاه
                        </a>
                    </li>
                    <li>
                        <a href="#ui">
                            <i class="flaticon-game"></i> افزونه
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="flaticon-group"></i> مشتریان
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-fw fa-suitcase"></i> پیش فرض
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Analytics.html">
                            <i class="fas fa-fw fa-chart-line"></i>تجزیه و تحلیل
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Ecommerce.html">
                            <i class="fas fa-fw fa-shopping-basket"></i> تجارت الکترونیک
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Content.html">
                            <i class="fas fa-fw fa-align-left"></i> محتوا
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled" data-link="layouts">
                    <li>
                        <a href="Layouts.List.html">
                            <i class="flaticon-document"></i> مقالات
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.category')}}">
                            <i class="flaticon-open-book"></i> موضوعات
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Images.html">
                            <i class="flaticon-time"></i>صفحات
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Details.html">
                            <i class="flaticon-structure"></i> منو
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.List.html">
                            <i class="flaticon-direction"></i> دایرکت 301
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Thumbs.html">
                            <i class="flaticon-picture"></i> اسلایدر
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Images.html">
                            <i class="flaticon-picture-1"></i>گالری
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Details.html">
                            <i class="flaticon-id-card"></i> نمایندگی
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Search.html">
                            <i class="flaticon-question"></i> سوالات متداول
                        </a>
                    </li>
                </ul>


                <ul class="list-unstyled" data-link="applications">
                    <li>
                        <a href="Apps.Todo.List.html">
                            <i class="flaticon-business"></i> محصول
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Survey.List.html">
                            <i class="flaticon-tag"></i> خصوصیت
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Chat.html">
                            <i class="flaticon-shopping-cart"></i> سفارشات
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Todo.List.html">
                            <i class="flaticon-web"></i> تراکنش
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Survey.List.html">
                            <i class="flaticon-money"></i> قیمت گذاری
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="ui">
                    <li>
                        <a href="Ui.Alerts.html">
                            <i class="flaticon-graphic-2"></i> نظرسنجی
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Badges.html">
                            <i class="flaticon-message"></i> جملات تصادفی
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Buttons.html">
                            <i class="flaticon-wifi"></i> شبکه اجتماعی
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Cards.html">
                            <i class="flaticon-medal"></i> افتخارات
                        </a>
                    </li>

                    <li>
                        <a href="Ui.Carousel.html">
                            <i class="flaticon-cogwheel"></i> تنظیمات
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Charts.html">
                            <i class="flaticon-support"></i> پشتیبانی
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Collapse.html">
                            <i class="flaticon-flag"></i> راهنما
                        </a>
                    </li>
                   
                   
                </ul>

                <ul class="list-unstyled" data-link="menu">
                    <li>
                        <a href="Menu.Default.html">
                            <i class="fas fa-fw fa-exchange-alt"></i> پیش فرض
                        </a>
                    </li>
                    <li>
                        <a href="Menu.Subhidden.html">
                            <i class="fas fa-fw fa-angle-left"></i> زیر پنهان
                        </a>
                    </li>
                    <li>
                        <a href="Menu.Hidden.html">
                            <i class="fas fa-fw fa-angle-double-left"></i> پنهان
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>






    <main>
        yield('content')
    </main>



    

    <script src="{{url('admin/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('admin/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('admin/js/vendor/Chart.bundle.min.js')}}"></script>
    <script src="{{url('admin/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{url('admin/js/vendor/moment.min.js')}}"></script>
    <!-- <script src="{{url('admin/js/vendor/fullcalendar.min.js')}}"></script>
    <script src="{{url('admin/js/persian-date.min.js')}}"></script>
    <script src="{{url('admin/js/persian-datepicker.min.js')}}"></script>-->
    <script src="{{url('admin/js/vendor/datatables.min.js')}}"></script>
    <script src="{{url('admin/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('admin/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{url('admin/js/vendor/progressbar.min.js')}}"></script>
    <script src="{{url('admin/js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{url('admin/js/vendor/select2.full.js')}}"></script>
    <script src="{{url('admin/js/vendor/nouislider.min.js')}}"></script>
    <!-- <script src="{{url('admin/js/vendor/bootstrap-datepicker.js')}}"></script>-->
    <script src="{{url('admin/js/vendor/Sortable.js')}}"></script>
    <script src="{{url('admin/js/dore.script.js')}}"></script>
    <script src="{{url('admin/js/scripts.js')}}"></script>
</body>


</html>