@extends('layouts.master')
@section('content')
<div class="container-fluid disable-text-selection">
    <div class="row">
        <div class="col-12" data-check-all="checkAll">
            <div class="mb-3">

                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.dashboard')}}">خانه</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">محتوا</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.agent')}}">نمایندگی</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">نمایندگی جدید</li>
                    </ol>
                </nav>



            </div>


            <div class="separator mb-5"></div>

            @include('layouts.message')


            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('admin.agent.store')}}" method="POST">

                        @csrf

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="code">کد نمایندگی</label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="مثال:1001" value="{{old('code')}}">
                                @error('code')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name_shop">نام فروشگاه</label>
                                <input type="text" class="form-control @error('name_shop') is-invalid @enderror" name="name_shop" placeholder="مثال: فروشگاه حسینی" value="{{old('name_shop')}}">
                                @error('name_shop')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name">نام مالک</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="مثال:حسینی" value="{{old('name')}}">
                                @error('name')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="form-check-label" for="sex">جنسیت
                                </label>
                                <select name="sex">
                                    <option value="آقا">آقا</option>
                                    <option value="خانم">خانم</option>
                                    <option value="شرکت">شرکت</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="form-check-label" for="level">سطح نمایندگی
                                </label>
                                <select name="level">
                                    <option value="نمایندگی">نمایندگی</option>
                                    <option value="عامل فروش">عامل فروش</option>
                                    <option value="بازاریاب">بازاریاب</option>
                                    <option value="فروشگاه">فروشگاه</option>
                                    <option value="دفتر مرکزی">دفتر مرکزی</option>
                                    <option value="کارخانه">کارخانه</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-4 mb-3">

                                <label class="form-check-label" for="state">استان
                                </label>
                                <select name="state" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true" >
                                    <option label="استان</option>

                                    <optgroup label=" موقعیت مکانی/استان"> <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                    <option value="آذربایجان غربی">آذربایجان غربی</option>
                                    <option value="اردبیل">اردبیل</option>
                                    <option value="اصفهان">اصفهان</option>
                                    <option value="البرز">البرز</option>
                                    <option value="ایلام">ایلام</option>
                                    <option value="بوشهر">بوشهر</option>
                                    <option value="تهران">تهران</option>
                                    <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                                    <option value="خراسان جنوبی">خراسان جنوبی</option>
                                    <option value="خراسان رضوی">خراسان رضوی</option>
                                    <option value="خراسان شمالی">خراسان شمالی</option>
                                    <option value="خوزستان">خوزستان</option>
                                    <option value="زنجان">زنجان</option>
                                    <option value="سمنان">سمنان</option>
                                    <option value=" سیستان و بلوچستان"> سیستان و بلوچستان</option>
                                    <option value="فارس">فارس</option>
                                    <option value="قزوین">قزوین</option>
                                    <option value="قم">قم</option>
                                    <option value="کردستان">کردستان</option>
                                    <option value="کرمان">کرمان</option>
                                    <option value="کرمانشاه">کرمانشاه</option>
                                    <option value="کهگیلویه و بویراحمد">کهگیلویه و بویراحمد</option>
                                    <option value="گلستان">گلستان</option>
                                    <option value="گیلان">گیلان</option>
                                    <option value="لرستان">لرستان</option>
                                    <option value="مازندران">مازندران</option>
                                    <option value="مرکزی">مرکزی</option>
                                    <option value="هرمزگان">هرمزگان</option>
                                    <option value="همدان">همدان</option>
                                    <option value="یزد">یزد</option>
                                    </optgroup>
                                </select>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="city">شهر</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="مثال: کاشان" value="{{old('city')}}">
                                @error('city')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="address">نشانی</label>
                                <textarea id="" class="form-control @error('address') is-invalid @enderror" name="address">{{old('address')}}</textarea>
                                @error('address')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="mob">شماره همراه</label>
                                <input type="text" class="form-control @error('mob') is-invalid @enderror" name="mob" placeholder="مثال:09138619130" value="{{old('mob')}}">
                                @error('mob')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="tel">تلفن ثابت</label>
                                <input type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" placeholder="مثال:55580000-031" value="{{old('tel')}}">
                                @error('tel')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="fax">فاکس</label>
                                <input type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" placeholder="مثال:55580000-031" value="{{old('fax')}}">
                                @error('fax')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="order">اولویت</label>
                                <input type="text" class="form-control @error('order') is-invalid @enderror" name="order" placeholder="مثال:1" value="{{old('order')}}">
                                @error('order')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                            <label for="order">انتخاب تصویر</label>
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary default text-white">
                                        <i class="glyph-icon flaticon-export"></i> بارگذاری
                                    </a>
                                    <input id="image" class="form-control" type="text" name="image">
                                </span>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-4 mb-3">

                                <img id="holder" style="margin-top:15px;max-height:100px;">
                            </div>
                        </div>









                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="form-check-label" for="lang">زبان
                                </label>
                                <select name="lang">
                                    @include('layouts.lang')

                                </select>

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label class="form-check-label" for="active">وضعیت انتشار
                                </label>
                                <select name="active">
                                    <option value="1">فعال</option>
                                    <option value="0">غیرفعال</option>
                                </select>


                            </div>
                        </div>


                        <button class="btn btn-primary default " type="submit"> ارسال فرم</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection