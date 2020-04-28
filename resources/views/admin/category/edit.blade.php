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
                            <a href="{{route('admin.category')}}">موضوعات</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">موضوع جدید</li>
                    </ol>
                </nav>



            </div>


            <div class="separator mb-5"></div>

            @include('layouts.message')


            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('admin.category.update', $category->id)}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="title">عنوان</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="مثال: اخبار" value="{{$category->title}}">
                                @error('title')
                                <div class="valid-feedback">{{$message}}      
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="slug">آدرس یکتا</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="مثال: news" value="{{$category->slug}}">
                                @error('slug')
                                <div class="valid-feedback">{{$message}}      
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="order">الویت</label>
                                <input type="text" class="form-control @error('order') is-invalid @enderror" name="order" placeholder="مثال:2" value="{{$category->order}}">
                                @error('order')
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
                                    <option value="0" <?php if($category->active==0) echo "selected"; ?> >عدم انتشار</option>
                                </select>


                            </div>
                        </div>


                        <button class="btn btn-primary default " type="submit"> ویرایش فرم</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection