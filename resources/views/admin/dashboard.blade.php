@extends('layouts.master')



@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>داشبورد</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">خانه</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">کتابخانه</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">داده</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
                <div class="col-lg-12 col-xl-6">

                    <div class="icon-cards-row">
                        <div class="owl-container">
                            <div class="owl-carousel dashboard-numbers">
                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="flaticon-clock"></i>
                                        <p class="card-text mb-0">سفارشات در حال انتظار
                                        </p>
                                        <p class="lead text-center"> <span class="numberltr">16 </span></p>
                                    </div>
                                </a>
                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="flaticon-present"></i>
                                        <p class="card-text mb-0">سفارشات کامل شده</p>
                                        <p class="lead text-center"> <span class="numberltr">32 </span></p>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="flaticon-arrows"></i>
                                        <p class="card-text mb-0">درخواست بازپرداخت
                                        </p>
                                        <p class="lead text-center"> <span class="numberltr"> 2</span></p>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="flaticon-message"></i>
                                        <p class="card-text mb-0">پست جدید</p>
                                        <p class="lead text-center"><span class="numberltr"> 25</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="position-absolute card-top-buttons">

                                    <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-fw fa-ellipsis-h"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right mt-3">
                                        <a class="dropdown-item" href="#">حراجی</a>
                                        <a class="dropdown-item" href="#">سفارشات</a>
                                        <a class="dropdown-item" href="#">بازپرداخت</a>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">حراجی</h5>
                                    <div class="dashboard-line-chart">
                                        <canvas id="salesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="fas fa-fw fa-sync-alt"></i>
                            </button>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">سفارشات اخیر
                            </h5>
                            <div class="scroll dashboard-list-with-thumbs">
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="admin/img/marble-cake-thumb.jpg" alt="Marble Cake" class="list-thumbnail border-0">
                                        <span class="badge badge-pill badge-theme-2 position-absolute badge-top-left">جدید</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">کیک شکلاتی</p>
                                            <div class="pl-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">سارا محمودی - کرج
                                                    , شهر تهران, ایران</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block"><span class="numberltr">09.04.2018</span></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="admin/img/fruitcake-thumb.jpg" alt="Fruitcake" class="list-thumbnail border-0">
                                        <span class="badge badge-pill badge-theme-2 position-absolute badge-top-left">جدید</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">کیک</p>
                                            <div class="pl-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">مبینا محمدی - وکیل آباد
                                                    , مشهد, ایران</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block"><span class="numberltr">09.04.2018</span></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="admin/img/chocolate-cake-thumb.jpg" alt="Chocolate Cake" class="list-thumbnail border-0">
                                        <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">پردازش</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">کیک آلبالویی</p>
                                            <div class="pl-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">اعظم سعیدی - شیراز
                                                    , ایران</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block"><span class="numberltr">09.04.2018</span></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="admin/img/fat-rascal-thumb.jpg" alt="Fat Rascal" class="list-thumbnail border-0">
                                        <span class="badge badge-pill badge-theme-3 position-absolute badge-top-left">پایان یافته</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">کیک نخودچی</p>
                                            <div class="pl-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">پریسا داوودی - سبزوار
                                                    خراسان رضوی, ایران</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block"><span class="numberltr">09.04.2018</span></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="admin/img/streuselkuchen-thumb.jpg" alt="Streuselkuchen" class="list-thumbnail border-0">
                                        <span class="badge badge-pill badge-theme-3 position-absolute badge-top-left">پایان یافته</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">کیک مرغ</p>
                                            <div class="pl-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">علی علیزاده - تبریز
                                                    ایران</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block"><span class="numberltr">09.04.2018</span></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="admin/img/cremeschnitte-thumb.jpg" alt="Cremeschnitte" class="list-thumbnail border-0">
                                        <span class="badge badge-pill badge-theme-3 position-absolute badge-top-left">پایان یافته</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">کیک پرتقال</p>
                                            <div class="pl-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small"> سمانه شایان - کرمان
                                                    ایران</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block"><span class="numberltr">09.04.2018</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">دسته بندی محصولات</h5>
                            <div class="dashboard-donut-chart">
                                <canvas id="polarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">لیست</h5>

                            <div class="scroll dashboard-logs">

                                <table class="table table-sm table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-1 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">ثبت نام کاربر جدید
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr"> 14:12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">فروش جدید: سوفلی
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">13:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">14 محصول اضافه شده است
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">12:55</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">فروش جدید: پای سیب</span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">12:44</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">فروش جدید: کیک مرغ</span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">12:30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">فروش جدید: سوفلی
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">10:40</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium"> 2دسته اضافه شدند
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">10:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">فروش جدید: کیک شکلاتی</span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">09:28</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">فروش جدید: کیک آلبالویی</span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">09:25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">فروش جدید: کیک شکلاتی</span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">09:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">فروش جدید: کیک مرغ</span>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-muted numberltr">08:20</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">بلیط ها
                            </h5>

                            <div class="scroll dashboard-list-with-user">
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="admin/img/profile-pic-l.jpg" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pr-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0">سارا احمدی</p>
                                            <p class="text-muted mb-0 text-small"><span class="numberltr">09.08.2018 - 12:45</span></p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="admin/img/profile-pic-l-7.jpg" alt="Mimi Carreira" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pr-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0">زیبا خجسته</p>
                                            <p class="text-muted mb-0 text-small"><span class="numberltr"> 05.08.2018 - 10:20</span></p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="admin/img/profile-pic-l-6.jpg" alt="Philip Nelms" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pr-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0">نفس خلیلی</p>
                                            <p class="text-muted mb-0 text-small"><span class="numberltr">05.08.2018 - 09:12<span></p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="admin/img/profile-pic-l-3.jpg" alt="Terese Threadgill" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pr-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0">علی زمانی</p>
                                            <p class="text-muted mb-0 text-small"><span class="numberltr">01.08.2018 - 18:20</span></p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="admin/img/profile-pic-l-5.jpg" alt="Kathryn Mengel" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pr-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0">زهرا بازغی</p>
                                            <p class="text-muted mb-0 text-small"><span class="numberltr">27.07.2018 - 11:45</span></p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="admin/img/profile-pic-l-4.jpg" alt="Esperanza Lodge" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                    </a>
                                    <div class="pr-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0">فاطمه خلیلی</p>
                                            <p class="text-muted mb-0 text-small"><span class="numberltr">24.07.2018 - 15:00</span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">تقویم</h5>
                            <div class="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">بهترین فروش ها</h5>
                            <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>حراجی</th>
                                        <th>موجودی</th>
                                        <th>دسته بندی</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">کیک</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"> <span class="numberltr">1452 </span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"> <span class="numberltr"> 62</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">کیک</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">ژله</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"> <span class="numberltr">1245 </span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"> <span class="numberltr">65 </span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">دسر</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">سوپ مرغ</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"> <span class="numberltr"> 1200</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"> <span class="numberltr">45 </span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">دسر</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">کیک مرغ</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr"> 1150 </span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">4</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">کیک</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">کیک شکلاتی</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">1050</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">41</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">کیک</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">کیک آلبالویی</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">998</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">24</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">کیک</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">سوپ ماست</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">924 </span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">20</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">دسر</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">کیک نخودچی</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">905</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">64</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">کیک</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">ژله بستنی</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">845</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">12</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">دسر</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">سوپ</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">830</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">36</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">دسر</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">کیک پای سیب</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">807</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">21</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">کیک</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">کیک نخودچی</p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">795</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted"><span class="numberltr">9</span></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">کیک</p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card dashboard-progress">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="fas fa-fw fa-sync-alt"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">وضعیت مشخصات</h5>
                            <div class="mb-4">
                                <p class="mb-2">اطلاعات پایه
                                    <span class="float-left text-muted numberltr">12/18</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">نمونه کارها
                                    <span class="float-left text-muted numberltr">1/8</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">جزئیات صورتحساب
                                    <span class="float-left text-muted numberltr">2/6</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">منافع
                                    <span class="float-left text-muted numberltr">0/8</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">اسناد حقوقی
                                    <span class="float-left text-muted numberltr">1/2</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card dashboard-sq-banner justify-content-end">
                        <div class="card-body justify-content-end d-flex flex-column">
                            <span class="badge badge-pill badge-theme-3 align-self-start mb-3">جزئیات</span>
                            <p class="lead text-white">جادویی در جزئیات است</p>
                            <p class="text-white">بله، واقعا!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card dashboard-link-list">
                        <div class="card-body">
                            <h5 class="card-title">کیک ها</h5>
                            <div class="d-flex flex-row">
                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">کیک مرغ</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک آلبالویی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک پای سیب</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک یزدی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">سولفی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک شکلاتی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک ناپلئونی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک دورنگ </a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک پرتغال</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک بیسکویتی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک</a>
                                        </li>
                                        <li>
                                            <a href="#">کیک اسفنجی</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">کیک شکلاتی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک آلبالویی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک اسفنجی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">شیرینی خامه ای</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">شیرینی نخودچی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">شیرینی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک دورنگ</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک خامه ای</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک آلبالویی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک پای سیب</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">کیک یزدی</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">سولفی</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row sortable">
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="fas fa-fw fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">وضعیت پرداخت</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="40" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="fas fa-fw fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">پیشرفت کار
                            </h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="64" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="fas fa-fw fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">کارهای کامل شده</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="75" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="fas fa-fw fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">پرداخت انجام شده است
                            </h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="32" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body">
                            <div class="float-right float-none-xs">
                                <i class="flaticon-profits text-large ml-2 color-theme-1 align-text-bottom"></i>
                                <div class="d-inline-block">
                                    <h5 class="d-inline">بازدید وب سایت</h5>
                                    <span class="text-muted text-small d-block">بازدید کننده منحصر فرد</span>
                                </div>
                            </div>
                            <div class="btn-group float-left float-none-xs mt-2">
                                <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    این هفته
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">هفته گذشته</a>
                                    <a class="dropdown-item" href="#">این ماه</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="visitChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body">
                            <div class="float-right float-none-xs">
                                <i class="flaticon-money text-large ml-2 color-theme-2 align-text-bottom"></i>
                                <div class="d-inline-block">
                                    <h5 class="d-inline">نرخ تبدیل</h5>
                                    <span class="text-muted text-small d-block"> در طول جلسه</span>
                                </div>
                            </div>
                            <div class="btn-group float-left mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    این هفته
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">هفته گذشته</a>
                                    <a class="dropdown-item" href="#">این ماه</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="conversionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="flaticon-print mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white"> <span class="numberltr">5 </span> فایل</p>
                                            <p class="text-small text-white">انتظار برای چاپ
                                            </p>
                                        </div>
                                    </div>

                                    <div>
                                        <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative" data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="5" aria-valuemax="12" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="flaticon-business-1 mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white"><span class="numberltr">4 </span> عمل</p>
                                            <p class="text-small text-white">در روند تصویب
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative" data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="4" aria-valuemax="6" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="flaticon-music mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white"> <span class="numberltr">8 </span> هشدار</p>
                                            <p class="text-small text-white">در انتظار اطلاع
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative" data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="8" aria-valuemax="10" data-show-percent="false">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-lg-6 col-sm-12 mb-4">
                    <div class="card dashboard-search">
                        <div class="card-body">
                            <h5 class="text-white mb-3">جستجوی پیشرفته
                            </h5>
                            <div class="form-container">
                                <form>
                                    <div class="form-group">
                                        <label>وضعیت</label>
                                        <select class="form-control select2-single">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="منطقه زمانی تهران/مشهد">
                                                <option value="AK">تهران</option>
                                                <option value="HI">مشهد</option>
                                            </optgroup>
                                            <optgroup label="منطقه زمانی رطوبتی">
                                                <option value="CA">رشت</option>
                                                <option value="NV">آمل</option>
                                                <option value="OR">بابل</option>
                                                <option value="WA">مازندران</option>
                                            </optgroup>
                                            <optgroup label="منطقه زمانی کوهستان">
                                                <option value="AZ">اردبیل</option>
                                                <option value="CO">لرستان</option>
                                                <option value="ID">تبریز</option>
                                                <option value="MT">کردستان</option>
                                                <option value="NE">نیشابور</option>
                                                <option value="NM">ارومیه</option>
                                                <option value="ND">زنجان</option>
                                                <option value="UT">البرز</option>
                                                <option value="WY">چهارمحال بختیاری</option>
                                            </optgroup>
                                            <optgroup label="منطقه زمانی مرکزی">
                                                <option value="AL">تهران</option>
                                                <option value="AR">سمنان</option>
                                                <option value="IL">یزد</option>
                                                <option value="IA">شاهرود</option>
                                                <option value="KS">قم</option>
                                                <option value="KY">شیراز</option>
                                                <option value="LA">کرمان</option>
                                                <option value="MN">اراک</option>
                                                <option value="MS">کرج</option>
                                                <option value="MO">کویر لوت</option>
                                                <option value="OK">فارس</option>
                                                <option value="SD">همدان</option>
                                                <option value="TX">گرمسار</option>
                                                <option value="TN">اصفهان</option>
                                                <option value="WI">خوانسار</option>
                                            </optgroup>
                                            <optgroup label=" منطقه ی زمانی شرقی">
                                                <option value="CT">خراسان رضوی</option>
                                                <option value="DE">خراسان شمالی</option>
                                                <option value="FL">خراسان جنوبی</option>
                                                <option value="GA">سیستان بلوچستان</option>
                                                <option value="IN">زابل</option>
                                                <option value="ME">فاروج</option>
                                                <option value="MD">زاهدان</option>
                                                <option value="MA">سبزوار</option>
                                                <option value="MI">نیشابور</option>
                                                <option value="NH">دامغان</option>
                                                <option value="NJ">قوچان</option>
                                                <option value="NY">مشهد</option>
                                                <option value="NC">کاشمر</option>
                                                <option value="OH">خراسان</option>
                                                <option value="PA">گلمکان</option>
                                                <option value="RI">گرگان</option>
                                                <option value="SC">شیروان</option>
                                                <option value="VT">چابهار</option>
                                                <option value="VA">تربت حیدریه</option>
                                                <option value="WV">طبس</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">بدون منطقه </option>
                                            <option value="TPZ">منطقه حادثه</option>
                                            <option value="TTZ">منطقه غربی</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>شهر</label>
                                        <select class="form-control select2-single">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="منطقه زمانی تهران/مشهد">
                                                <option value="AK">تهران</option>
                                                <option value="HI">مشهذ</option>
                                            </optgroup>
                                            <optgroup label="منطقه زمانی رطوبتی">
                                                <option value="CA">رشت</option>
                                                <option value="NV">آمل</option>
                                                <option value="OR">بابل</option>
                                                <option value="WA">مازندران</option>
                                            </optgroup>
                                            <optgroup label="منطقه زمانی کوهستان">
                                                <option value="AZ">اردبیل</option>
                                                <option value="CO">لرستان</option>
                                                <option value="ID">تبریز</option>
                                                <option value="MT">کردستان</option>
                                                <option value="NE">نیشابور</option>
                                                <option value="NM">ارومیه</option>
                                                <option value="ND">زنجان</option>
                                                <option value="UT">البرز</option>
                                                <option value="WY">چهارمحال بختیاری</option>
                                            </optgroup>
                                            <optgroup label="منطقه زمانی مرکزی">
                                                <option value="AL">تهران</option>
                                                <option value="AR">سمنان</option>
                                                <option value="IL">یزد</option>
                                                <option value="IA">شاهرود</option>
                                                <option value="KS">قم</option>
                                                <option value="KY">شیراز</option>
                                                <option value="LA">کرمان</option>
                                                <option value="MN">اراک</option>
                                                <option value="MS">کرج</option>
                                                <option value="MO">کویر لوت</option>
                                                <option value="OK">فارس</option>
                                                <option value="SD">همدان</option>
                                                <option value="TX">گرمسار</option>
                                                <option value="TN">اصفهان</option>
                                                <option value="WI">خوانسار</option>
                                            </optgroup>
                                            <optgroup label=" منطقه ی زمانی شرقی">
                                                <option value="CT">خراسان رضوی</option>
                                                <option value="DE">خراسان شمالی</option>
                                                <option value="FL">خراسان جنوبی</option>
                                                <option value="GA">سیستان بلوچستان</option>
                                                <option value="IN">زابل</option>
                                                <option value="ME">فاروج</option>
                                                <option value="MD">زاهدان</option>
                                                <option value="MA">سبزوار</option>
                                                <option value="MI">نیشابور</option>
                                                <option value="NH">دامغان</option>
                                                <option value="NJ">قوچان</option>
                                                <option value="NY">مشهد</option>
                                                <option value="NC">کاشمر</option>
                                                <option value="OH">خراسان</option>
                                                <option value="PA">گلمکان</option>
                                                <option value="RI">گرگان</option>
                                                <option value="SC">شیروان</option>
                                                <option value="VT">چابهار</option>
                                                <option value="VA">تربت حیدریه</option>
                                                <option value="WV">طبس</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">بدون منطقه</option>
                                            <option value="TPZ">منطقه حادثه</option>
                                            <option value="TTZ">منطقه غربی</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-5">
                                        <label>تاریخ</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text input-group-append input-group-addon">

                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>محدوده قیمت</label>
                                        <div>
                                            <div class="slider" id="dashboardPriceRange"></div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary mt-3 pl-5 pr-5">جستجو</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart2"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dashboard-top-rated">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right mt-3">
                                <a class="dropdown-item" href="#">آیتم های پر فروش
                                </a>
                                <a class="dropdown-item" href="#">آیتم های مورد نظر برتر
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">آیتم های با ارزش
                            </h5>
                            <div class="owl-container" dir="ltr">
                                <div class="owl-carousel best-rated-items">
                                    <div>
                                        <img src="admin/img/carousel-1.jpg" alt="Cheesecake" class="mb-4">
                                        <h6 class="mb-1">
                                            <span class="mr-2">1.</span>کیک پرتغالی</h6>

                                        <select class="rating" data-current-rating="5" data-readonly="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p class="text-small text-muted mb-0 d-inline-block">(48)</p>
                                    </div>
                                    <div>
                                        <img src="admin/img/carousel-2.jpg" alt="Chocolate Cake" class="mb-4">
                                        <h6 class="mb-1">
                                            <span class="mr-2">2.</span>کیک شکلاتی</h6>

                                        <select class="rating" data-current-rating="5" data-readonly="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p class="text-small text-muted mb-0 d-inline-block">(48)</p>
                                    </div>
                                    <div>
                                        <img src="admin/img/carousel-3.jpg" alt="Cremeschnitte" class="mb-4">
                                        <h6 class="mb-1">
                                            <span class="mr-2">3.</span>کیک مرغ</h6>


                                        <select class="rating" data-current-rating="5" data-readonly="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p class="text-small text-muted mb-0 d-inline-block">(48)</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

