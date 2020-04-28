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
                            <a href="{{route('admin.page')}}">صفحات</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"></li>جدید</li>
                    </ol>
                </nav>



            </div>


            <div class="separator mb-5"></div>

            @include('layouts.message')


            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('admin.page.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="title">عنوان</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="عنوان یا تیتر مقاله" value="{{old('title')}}">
                                @error('title')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="slug">آدرس یکتا</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="مثال: مقاله-یک" value="{{old('slug')}}">
                                @error('slug')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="keyword">توصیف صفحه(سئو)</label>
                                <input type="text" class="form-control @error('keyword') is-invalid @enderror" name="keyword" placeholder="مقاله را توصیف کنید" value="{{old('keyword')}}">
                                @error('keyword')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="descriotion">متن مقاله</label>
                                <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>

                                @error('descriotion')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                                              
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                            <label for="order">تصویر شاخص</label>
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



                        <div class="form-group">
                            <div class="form-check">

                                <label class="form-check-label" for="lang">زبان
                                </label>
                                <select name="lang">
                                    @include('layouts.lang')

                                </select>


                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-check">

                                <label class="form-check-label" for="active">وضعیت انتشار
                                </label>
                                <select name="active">
                                    <option value="1">انتشار</option>
                                    <option value="0">عدم انتشار</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" >
                        <button class="btn btn-primary default " type="submit"> ارسال فرم</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection