@extends('layouts.master')
@section('content')
<div class="container-fluid disable-text-selection">
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <h1>مقالات</h1>
                <div class="float-sm-left text-zero">
                    <a href="{{route('admin.article.create')}}" class="btn btn-primary default btn-lg top-right-button mr-1">
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
                        <li class="breadcrumb-item active" aria-current="page">مقالات</li>
                    </ol>
                </nav>

            </div>

            <div class="mb-2">

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
        <div class="col-12 list" data-check-all="checkAll">


            @foreach($articles as $article)

            <div class="card d-flex flex-row mb-3">
                <a class="d-flex" href="#">
                  
                    <img src="{{url($article->image)}}" alt="category" class="list-thumbnail responsive border-0">
                   

                </a>
                <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                    <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                        <a href="#" class="w-20 w-sm-100">
                            <p class="list-item-heading mb-1 truncate">{{$article->title}}</p>
                        </a>
                        <p class="mb-1 text-muted text-small w-10 w-sm-100">
                            @foreach($article->categories()->pluck('title') as $category)
                            {{$category}}
                            <br>
                            @endforeach
                        </p>
                        <p class="mb-1 text-muted text-small w-10 w-sm-100">{{$article->user->name}}</p>
                        <p class="mb-1 text-muted text-small w-10 w-sm-100">{{$article->hit}}</p>
                        <p class="mb-1 text-muted text-small w-10 w-sm-100">{{$article->created_at}}</p>
                        <p class="mb-1 text-muted text-small w-10 w-sm-100">{{$article->lang}}</p>
                        @if($article->active)
                        <a href="{{route('admin.article.updatestatus',$article->id)}}" class="btn btn-info default btn-xs mb-1">فعال</a>
                        @else
                        <a href="{{route('admin.article.updatestatus',$article->id)}}" class="btn btn-danger default btn-xs mb-1">غیرفعال</a>

                        @endif

                        <div> <a href="{{route('admin.article.edit',$article->id)}}" class="btn btn-info default btn-xs mb-1"><i class="glyph-icon fas fa-edit"></i> ویرایش</a>
                            <a href="{{route('admin.article.destroy',$article->id)}}" onclick="return confirm('رکورد حذف شود؟');" class="btn btn-danger default btn-xs mb-1"><i class="glyph-icon fas fa-trash"></i> حذف</a>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                        <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label"></span>
                        </label>
                    </div>
                </div>
            </div>

            @endforeach



            <nav class="mt-4 mb-3">
                <ul class="pagination justify-content-center mb-0">
                    {{$articles->links()}}
                </ul>
            </nav>


        </div>
    </div>
</div>
@endsection