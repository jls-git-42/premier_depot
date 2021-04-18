<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ Page_Title($pageTitle ?? null) }}</title>
        <!-- <title>{{ isset($pageTitle) ? $pageTitle . ' | ' . config('app.name') : config('app.name')}}</title> -->
        <!--<title>@yield('title',config('app.name'))</title> -->
        
        <link rel="icon" href="{{asset('/img/favicon.ico')}}">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


        <!-- Fonts -->
        
        <!-- Styles -->
    
    </head>
    <body class="py-6 flex flex-col items-center justify-between min-h-screen">

       <main role="main" class="flex flex-col items-center justify-center">
            <!-- contenu qui va varier de page en page-->
            @yield('content')
       </main>

    @include('/Layouts/Partials/_Footer')

    @yield('script_footer')
    

    </body>

</html>