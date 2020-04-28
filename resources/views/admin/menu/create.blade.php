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
                            <a href="{{route('admin.menu')}}">منو</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">منو جدید</li>
                    </ol>
                </nav>



            </div>


            <div class="separator mb-5"></div>

            @include('layouts.message')


            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('admin.menu.store')}}" method="POST">

                        @csrf

                    
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="title">عنوان</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="مثال: خانه " value="{{old('title')}}">
                                @error('title')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="link">لینک منو</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" placeholder="www.test.com/index.php" value="{{old('link')}}">
                                @error('link')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                     

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="idparent">والد</label>


                                <select name="idparent" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                   

                                    <optgroup label="انتخاب والد منو">
                                    <option value="0">بدون والد - سر شاخه</option>
                                        @foreach($idparent as $menu_id => $menu_title)
                                        <option value="{{$menu_id}}">{{$menu_title}}</option>
                                        @endforeach

                                    </optgroup>
                                </select>


                                @error('idparent')
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