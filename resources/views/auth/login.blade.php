<!DOCTYPE html>
<html lang="fa">


<head>
    <meta charset="UTF-8">
    <title>ورود</title>
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

                            <p class="text-white h4">ورود</p>
                            <p class="white mb-0">

                                لطفا برای ثبت نام
                                <a href="{{route('register')}}" class="white">اینجا</a>
                                کلیک کنید
                            </p>


                        </div>
                        <div class="form-side">
                            <a href="Dashboard.Default.html">
                                <span class="logo-single"></span>
                            </a>
                            @include('layouts.message')
                            <h6 class="mb-4">ورود</h6>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="email">ایمیل</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                                        @error('email')
                                        <div class="valid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-10 mb-3">
                                        <label for="password">گذرواژه</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                        @error('password')
                                        <div class="valid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-10 mb-3">

                                        <div class="form-check">

                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">مرا به خاطر بسپار</label> </div>
                                        @error('remember')
                                        <div class="valid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                              
                                <button class="btn btn-primary default btn-lg btn-shadow" type="submit">ورود</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        گذرواژه را فراموش کردید؟
                                    </a>
                                @endif
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