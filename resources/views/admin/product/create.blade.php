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
                            <a href="{{route('admin.article')}}">مقالات</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"></li>جدید</li>
                    </ol>
                </nav>



            </div>


            <div class="separator mb-5"></div>

            @include('layouts.message')


            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('admin.article.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name">نام طرح</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="نام طرح فرش" value="{{old('name')}}">
                                @error('name')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3">
                                <label for="code">کد طرح</label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="کد طرح فرش" value="{{old('code')}}">
                                @error('code')
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


                            <div class="col-md-4 mb-3">

                                <label class="form-check-label" for="tag">لیبل محصول
                                </label>
                                <select name="tag" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option label="لیبل"></option>

                                    <optgroup label=" لیبل">


                                        <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                        <option value="آذربایجان غربی">آذربایجان غربی</option>
                                        <option value="اردبیل">اردبیل</option>

                                    </optgroup>
                                </select>

                            </div>


                        </div>

                       



                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="reed">کلکسیون</label>
                                <select name="reed" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>
                                    <optgroup label="دسته بندی مقاله">
                                                                          </optgroup>
                                </select>

                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="reed">سبک نقشه</label>
                                <select name="reed" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>
                                    <optgroup label="دسته بندی مقاله">
                                                                          </optgroup>
                                </select>

                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>





                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="reed">تراکم عرضی فرش (شانه)</label>
                                <select name="reed" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>
                                    <optgroup label="دسته بندی مقاله">
                                                                          </optgroup>
                                </select>

                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="reed">تراکم طولی فرش (تراکم)</label>
                                <select name="reed" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>
                                    <optgroup label="دسته بندی مقاله">
                                                                          </optgroup>
                                </select>

                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="reed">نوع بافت</label>
                                <select name="reed" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>
                                    <optgroup label="دسته بندی مقاله">
                                                                          </optgroup>
                                </select>

                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="reed">جنس نخ خاب</label>
                                <select name="reed" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>
                                    <optgroup label="دسته بندی مقاله">
                                                                          </optgroup>
                                </select>

                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name">قیمت پایه</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="نام طرح فرش" value="{{old('name')}}">
                                @error('name')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3">
                                <label for="code">قیمت نهایی</label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="کد طرح فرش" value="{{old('code')}}">
                                @error('code')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>











                  




                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="descriotion">توصیف محصول</label>
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
                        
                            <div class="col-md-4 mb-3">
                                <label for="order">تصویر دکوراسیون</label>
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
                                <label for="name">ارتفاع نخ خاب</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="نام طرح فرش" value="{{old('name')}}">
                                @error('name')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3">
                                <label for="code">وزن تقریبی</label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="کد طرح فرش" value="{{old('code')}}">
                                @error('code')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="name">تعداد رنگ به کار رفته شده در فرش</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="نام طرح فرش" value="{{old('name')}}">
                                @error('name')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-3">
                                <label for="code">اولویت</label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="کد طرح فرش" value="{{old('code')}}">
                                @error('code')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="category">سایز</label>


                                <select name="categories[]" class="form-control select2-multiple select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>

                                    <optgroup label="دسته بندی مقاله">
                                       

                                    </optgroup>
                                </select>


                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                      
                            <div class="col-md-4 mb-3">
                                <label for="category">رنگ زمینه</label>


                                <select name="categories[]" class="form-control select2-multiple select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>

                                    <optgroup label="دسته بندی مقاله">
                                       

                                    </optgroup>
                                </select>


                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="category">سایر خصوصیات</label>


                                <select name="categories[]" class="form-control select2-multiple select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>

                                    <optgroup label="دسته بندی مقاله">
                                       

                                    </optgroup>
                                </select>


                                @error('category')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
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
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <button class="btn btn-primary default " type="submit"> ارسال فرم</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection