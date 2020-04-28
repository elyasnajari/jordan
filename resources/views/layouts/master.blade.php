<!DOCTYPE html>
<html lang="fa">


<head>
    <meta charset="UTF-8">
    <title>Negareh CMS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    @include('admin.css')

</head>

<body id="app-container" class="menu-default">
<div class="wrapper">
<div id="preloader_1">
  			<span></span>
  			<span></span>
  			<span></span>
  			<span></span>
  			<span></span>
  		</div>
</div>

    @include('admin.nav')
    @include('admin.menu')
    <main>
      @yield('content')
    </main>

    @include('admin.java')
    
</body>


</html>