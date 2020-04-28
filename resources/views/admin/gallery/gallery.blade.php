@extends('layouts.master')
@section('content')
<div class="container-fluid disable-text-selection">
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
            <div class="alert alert-secondary" role="alert">
   
    <a href="{{route('admin.catgallery')}}" class="btn btn-info default btn-md mb-1"> ایجاد دسته بندی</a> 
    برای گالری دسته بندی جدید ایجاد کن      </div>
                <h1>موضوعات</h1>

                <div class="float-sm-left text-zero">
                    <a href="{{route('admin.gallery.create')}}" class="btn btn-primary default btn-lg top-right-button mr-1">
                        جدید اضافه کن
                    </a>


                    <div class="btn-group" dir="ltr">

                        <div class="btn btn-primary default btn-lg pl-4 pr-0 check-button">

                            <label class="custom-control custom-checkbox mb-0 d-inline-block">
                                <input type="checkbox" class="custom-control-input" id="checkAll">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <button type="button" class="btn btn-lg btn-primary default dropdown-toggle dropdown-toggle-split pl-2 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">تعویق افتادن</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">عمل</a>
                            <a class="dropdown-item" href="#">دیگر اعمال</a>
                        </div>
                    </div>

                </div>

                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.dashboard')}}">خانه</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">محتوا</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">موضوعات</li>
                    </ol>
                </nav>

            </div>

            <div class="mb-2">
                <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                    گزینه های نمایش
                    <i class="fas fa-fw fa-caret-down"></i>
                </a>
                <div class="collapse d-md-block" id="displayOptions">

                    <div class="d-block d-md-inline-block">

                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                            <input placeholder="جستجو...">
                        </div>


                    </div>

                </div>
            </div>
            @include('layouts.message')
            <div class="separator mb-5"></div>
        </div>
    </div>
   
    <div class="row">

        @foreach($gallerys as $gallery)
        <div class="col-md-6 col-sm-6 col-lg-4 col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img alt="Profile" src="<?php echo $add = dirname("$gallery->image") . "/thumbs/" . basename("$gallery->image"); ?>" class="img-thumbnail border-0 rounded-circle mb-4 list-thumbnail">
                        <p class="list-item-heading mb-1">{{$gallery->title}}</p>
                        <p class="mb-4 text-muted text-small"> @foreach($gallery->catgalleries()->pluck('title') as $catgallery)
                            {{$catgallery}}
                            <br>
                            @endforeach
                        </p>
                        <a href="{{route('admin.gallery.edit',$gallery->id)}}" class="btn btn-info default btn-xs mb-1"><i class="glyph-icon fas fa-edit"></i> ویرایش</a>
                        <a href="{{route('admin.gallery.destroy',$gallery->id)}}" onclick="return confirm('رکورد حذف شود؟');" class="btn btn-danger default btn-xs mb-1"><i class="glyph-icon fas fa-trash"></i> حذف</a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <nav class="mt-4 mb-3">
            <ul class="pagination justify-content-center mb-0">
                {{$gallerys->links()}}
            </ul>
        </nav>


    </div>

</div>
@endsection