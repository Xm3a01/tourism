<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta  charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title> Jungle</title>

    {{-- styles --}}
    @include('website._include.styles')


    </head>		
    <body id="page-top">

        {{-- heaser --}}
        @include('website._include.header')

        <main>

            @yield('content')
            
        </main>
        <!--Footer -->
        @include('website._include.footer');
        <!-- javascript file--->
        @include('website._include.scripts');
    </body>
</html>