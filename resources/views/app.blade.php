<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BCP - Student Information System</title>

        @include('_partials.style')
        
    </head>

    <body class="antialiased">
        
        @include('_partials.header')

        @include('_partials.sidebar')

        <main id="main" class="main">

            <div class="pagetitle">
              <h1> @yield('title') </h1>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">@yield('title') </li>
                  <li class="breadcrumb-item active">@yield('fn') @yield('mn') @yield('ln') @yield('sn')</li>
                </ol>
              </nav>
            </div>

            @yield('Component')

        </main>


        @include('_partials.footer')

        @include('_partials.script')

    </body>

</html>
