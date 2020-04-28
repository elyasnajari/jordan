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
                            <a href="{{route('admin.category')}}">گالری</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش</li>
                    </ol>
                </nav>



            </div>


            <div class="separator mb-5"></div>

            @include('layouts.message')


            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('admin.gallery.update',$gallery->id)}}" method="POST">
                        @method('put')
                        @csrf

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="title">عنوان</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$gallery->title}}">
                                @error('title')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="category">موضوع</label>


                                <select name="categories[]" class="form-control select2-multiple select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                                    <option label="&nbsp;">&nbsp;</option>

                                    <optgroup label="دسته بندی مقاله">
                                        @foreach($catgalleries as $cat_id => $cat_title)
                                        <option value="{{$cat_id}}"
                                        
                                        <?php
                                         if(in_array($cat_id,$gallery->catgalleries->pluck('id')->toArray()))
                                        echo 'selected' ?>
                                        
                                        >{{$cat_title}}</option>
                                        @endforeach

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
                                <label for="description">توضیحات</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{$gallery->description}}</textarea>
                                @error('description')
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
                                    <input id="image" class="form-control" type="text" name="image" value="{{$gallery->image}}">
                                </span>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-4 mb-3">

                                <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$gallery->image}}">
                            </div>
                        </div>


                        <button class="btn btn-primary default " type="submit"> ارسال فرم</button>
                    </form>


                </div>
            </div>



        </div>
    </div>

</div>
</div>
</div>
@endsection