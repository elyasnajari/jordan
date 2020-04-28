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
                            <a href="{{route('admin.slider')}}">اسلایدر</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">جدید</li>
                    </ol>
                </nav>



            </div>


            <div class="separator mb-5"></div>

            @include('layouts.message')


            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('admin.slider.store')}}" method="POST">

                        @csrf

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="title">عنوان</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="" value="{{old('title')}}">
                                @error('title')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="order">الویت</label>
                                <input type="text" class="form-control @error('order') is-invalid @enderror" name="order" placeholder="مثال:1" value="{{old('order')}}">
                                @error('order')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="description">توضیح</label>
                                <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
                                @error('description')
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
                                    <option value="FA">FA</option>
                                    <option value="EN">EN</option>
                                    <option value="AR">AR</option>

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