<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{$seo->title}}</title>
        <meta name="description" content="{{$seo->description}}" />
        <meta name="keywords" content="{{$seo->keywords}}" />
        
        <meta name="og:site_name" content="{{$seo->ogSiteName}}" />
        <meta name="og:url" content="{{$seo->ogUrl}}" />
        <meta name="og:title" content="{{$seo->ogTitle}}" />
        <meta name="og:description" content="{{$seo->ogDescription}}" />
        <meta name="og:image" content="{{$seo->ogImage}}" />


        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}" />
        <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin />
        <link href="{{asset('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap')}}" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="{{asset('js/axios.min.js')}}"></script>
        {{-- <script src="{{asset('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js')}}"></script> --}}
    </head>

    <body class="d-flex flex-column h-100">
        @include("components.navbar")


        {{-- @include("components.loader") --}}

        <div class="" id= "content-div">
            @yield("content")
        </div>

        @include("components.footer")

        <!-- Bootstrap core JS-->
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>

    </body>
</html>
