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
            <span class="name">{{Auth::user()->name}}</span>
            <span>
                <img alt="Profile Picture" src="{{url('admin/img/profile-pic-l-2.jpg')}}">
            </span>
        </button>

        <div class="dropdown-menu dropdown-menu-right mt-3">
            <a class="dropdown-item" href="#">پروفایل</a>
            <a class="dropdown-item" href="#">کاربران</a>
        
            <a class="dropdown-item" href="{{route('logout')}}">خروج</a>
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