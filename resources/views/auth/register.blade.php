<!DOCTYPE html>
<html lang="fa">


<head>
    <meta charset="UTF-8">
    <title>ثبت نام کاربران</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @include('admin.css')


</head>

<body class="background">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side">
                            <p class="text-white h4">ثبت نام</p>
                            <p class="white mb-0">
                              
                               اگر عضو هستید، لطفا
                                <a href="{{route('login')}}" class="white">وارد</a>
                                شوید.
                            </p>
                        </div>
                        <div class="form-side">
                        @include('layouts.message')
                            <h6 class="mb-4">ثبت نام </h6>

                            <form action="{{route('register')}}" method="POST">
                        @csrf

                            <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="name">نام</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{old('name')}}">
                                @error('name')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-5 mb-3">
                                <label for="family">نام خانوادگی</label>
                                <input type="text" class="form-control @error('family') is-invalid @enderror" name="family"  value="{{old('family')}}">
                                @error('family')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <label for="mob">تلفن همراه</label>
                                <input type="text" class="form-control @error('mob') is-invalid @enderror" name="mob"  value="{{old('mob')}}">
                                @error('mob')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <label for="email">ایمیل</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{old('email')}}">
                                @error('email')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        

                       
                                
                        
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="password">گذرواژه</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  >
                                @error('password')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="password_confirmation">تکرار گذرواژه</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"  >
                                @error('password_confirmation')
                                <div class="valid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                           

                        </div>




                                <div class="d-flex justify-content-end align-items-center">
                                    <button class="btn btn-primary default btn-lg btn-shadow" type="submit">ثبت نام</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admin.java')

</body>


</html>